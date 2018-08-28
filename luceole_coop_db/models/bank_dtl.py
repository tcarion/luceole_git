from sqlalchemy import Column, String, DateTime
from model import Base
import uuid


class BankDetail(Base):
    __tablename__ = "bank_detail"
    bk_dtl_id = Column(String(50), primary_key=True)
    pers_id = Column(String(50), nullable=False)
    acct_holder = Column(String(255), nullable=False)
    iban_num = Column(String(50), nullable=False)
    bic_code = Column(String(15), nullable=False)

    def __init__(self, bk_dtl_id=None, pers_id=None, acct_holder=None, iban_num=None, bic_code=None):

        if bk_dtl_id is None:
            self.bk_dtl_id = str(uuid.uuid4()) #why str?
        else:
            self.bk_dtl_id = bk_dtl_id

        self.pers_id = pers_id
        self.acct_holder = acct_holder
        self.iban_num = iban_num
        self.bic_code = bic_code

    def __repr__(self):
        return "<BankDetails %s %s>" % (self.bk_dtl_id, self.acct_holder)
