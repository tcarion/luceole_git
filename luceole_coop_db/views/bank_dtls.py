from models.bank_dtl import BankDetail
import uuid
import pandas as pd


class BankDetails:
    def __init__(self, app):
        self.app = app
        self.session = self.app.session

    def create(self, bk_dtl_id=None, pers_id=None, acct_holder=None, iban_num=None, bic_code=None):

        if bk_dtl_id is not None:
            new_bank_dtl = BankDetail(bk_dtl_id, pers_id, acct_holder, iban_num, bic_code)
            while self.exists(bk_dtl_id):
                bk_dtl_id = str(uuid.uuid4())
                new_bank_dtl = BankDetail(bk_dtl_id, pers_id, acct_holder, iban_num, bic_code)

        else:
            new_bank_dtl = BankDetail(bk_dtl_id, pers_id, acct_holder, iban_num, bic_code)

        self.session.add(new_bank_dtl)
        self.session.commit()
        return bk_dtl_id

    def update(self, updated_obj):
        obj_id = updated_obj.bk_dtl_id
        if self.exists(obj_id):
            bank_obj = self.read(bk_dtl_id=obj_id)
            for k,v in bank_obj.__dict__.items():
                setattr(bank_obj, k, getattr(updated_obj, k))
            self.session.commit()
            return bank_obj
        else:
            return None

    def delete(self, bk_dtl_id):
        obj_to_del = self.read(bk_dtl_id)
        self.session.delete(obj_to_del)
        self.session.commit()
        return self.session

    def read(self, bk_dtl_id):
        return self.session.query(BankDetail).filter(BankDetail.bk_dtl_id == bk_dtl_id).first()

    def exists(self, bk_dtl_id):
        res = self.session.query(BankDetail).filter(BankDetail.bk_dtl_id == bk_dtl_id).all()
        return len(res) > 0

    def from_csv(self, filepath):
        df_input = pd.read_csv(filepath_or_buffer=filepath)
        df_input.to_sql(name='bank_detail', con=self.session)

    def to_csv(self, filepath, dump_flag=False):
        if dump_flag:
            df_output = pd.read_sql_table('bank_detail', con=self.session)
        else:
            columns = ['pers_id', 'acct_holder', 'iban_num', 'bic_code']
            df_output = pd.read_sql_table('bank_detail', con=self.session, columns=columns)

        df_output.to_csv(na_rep="", index=False, path_or_buf=filepath)