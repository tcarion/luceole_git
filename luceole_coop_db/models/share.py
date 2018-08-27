from sqlalchemy import Column, String, Float
from model import Base
import uuid


class Share(Base):
    __tablename__ = "share"
    share_id = Column(String(50), primary_key=True)
    share_name = Column(String(50), nullable=False)
    share_value = Column(Float, nullable=False)

    def __init__(self, share_id=None, share_name=None, share_value=None):

        if share_id is None:
            self.share_id = uuid.uuid4()
        else:
            self.share_id = share_id

        self.share_name = share_name
        self.share_value = share_value

    def __repr__(self):
        return "<Share %s %s>" % (self.share_id, self.share_name)
