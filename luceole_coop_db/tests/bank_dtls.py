from luceole_coop_db import Application
from views.bank_dtls import BankDetails
from models.model import Base
from models.bank_dtl import BankDetail
import uuid

if __name__ == '__main__':
    filepath = 'sqlite:///sqlalchemy_example.db'
    app = Application(filepath)
    bk_dtl = BankDetails(app=app)
    bk_id = str(uuid.uuid4())
    print bk_id
    bk_dtl.create(bk_dtl_id=bk_id, pers_id='P0001', acct_holder='Samuel Courtois', iban_num='BE567898762345',
                  bic_code='GEBABBEB')
    print bk_dtl.read(bk_id)