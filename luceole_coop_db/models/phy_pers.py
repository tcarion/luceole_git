from sqlalchemy import Column, String, DateTime
from model import Base
import uuid


class PhysicalPerson(Base):
    __tablename__ = "physical_person"
    pp_id = Column(String(50), primary_key=True)
    last_name = Column(String(255), nullable=False)
    first_name = Column(String(255), nullable=False)
    email = Column(String(255))
    phone_num = Column(String(50))
    mobile_phone_num = Column(String(50))
    street = Column(String(50))
    number = Column(String(10))
    box = Column(String(10))
    zip_code = Column(String(50))
    locality = Column(String(50))
    country = Column(String(50))
    birth_date = Column(DateTime)
    birth_place = Column(String(50))
    national_id = Column(String(50))
    profession = Column(String(50))
    proposer = Column(String(50))
    tutor = Column(String(50))
    contact_media = Column(String(50))

    def __init__(self, pp_id=None, last_name=None, first_name=None, email=None, phone_num=None,
                 mobile_phone_num=None, street=None, number=None, box=None, zip_code=None, locality=None, country=None,
                 birth_date=None, birth_place=None, national_id=None, profession=None, proposer=None, tutor=None,
                 contact_media=None):

        if pp_id is None:
            self.pp_id = uuid.uuid4()
        else:
            self.pp_id = pp_id

        self.last_name = last_name
        self.first_name = first_name
        self.email = email
        self.phone_num = phone_num
        self.mobile_phone_num = mobile_phone_num
        self.street = street
        self.number = number
        self.box = box
        self.zip_code = zip_code
        self.locality = locality
        self.country = country
        self.birth_date = birth_date
        self.birth_place = birth_place
        self.national_id = national_id
        self.profession = profession
        self.proposer = proposer
        self.tutor = tutor
        self.contact_media = contact_media

    def __repr__(self):
        return "PhysicalPerson %s %s %s >" % (self.pp_id, self.last_name, self.first_name)
