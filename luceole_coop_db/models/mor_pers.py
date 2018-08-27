from sqlalchemy import Column, String, DateTime
from model import Base
import uuid


class PhysicalPerson(Base):
    __tablename__ = "moral_person"
    pm_id = Column(String(50), primary_key=True)
    pm_name = Column(String(255), nullable=False)
    email = Column(String(255))
    phone_num = Column(String(50))
    mobile_phone_num = Column(String(50))
    street = Column(String(50))
    number = Column(String(10))
    box = Column(String(10))
    zip_code = Column(String(50))
    locality = Column(String(50))
    country = Column(String(50))
    tva_num = Column(String(50))

    def __init__(self, pm_id=None, pm_name=None, email=None, phone_num=None, mobile_phone_num=None,
                 street=None, number=None, box=None, zip_code=None, locality=None, country=None,
                 tva_num=None):

        if pm_id is None:
            self.pm_id = uuid.uuid4()
        else:
            self.pm_id = pm_id

        self.pm_name = pm_name
        self.email = email
        self.phone_num = phone_num
        self.mobile_phone_num = mobile_phone_num
        self.street = street
        self.number = number
        self.box = box
        self.zip_code = zip_code
        self.locality = locality
        self.country = country
        self.tva_num = tva_num

    def __reduce__(self):
        return "MoralPerson %s %s>" % (self.pm_id, self.pm_name)
