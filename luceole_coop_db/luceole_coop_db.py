from sqlalchemy import create_engine
from sqlalchemy.orm import sessionmaker
from models.model import Base
from models.bank_dtl import BankDetail


class Application:
    def __init__(self, db_file):
        self.engine = create_engine(db_file)
        self.DBSession = sessionmaker(bind=self.engine)
        self.session = self.DBSession()
        Base.metadata.bind = self.engine

