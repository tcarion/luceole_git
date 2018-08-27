from sqlalchemy import Column, String, Integer, Float, DateTime
from model import Base
import uuid


class ShareMovement(Base):
    __tablename__ = "share_mvt"
    sh_mvt_id = Column(String(50), primary_key=True)
    mvt_date = Column(DateTime, nullable=False)
    p_deb = Column(String(50), nullable=False)
    p_cred = Column(String(50), nullable=False)
    sh_id = Column(String(50), nullable=False)
    qty = Column(Integer)
    amt = Column(Float)
    cur = Column(String(3))

    def __init__(self, sh_mvt_id=None, mvt_date=None, p_deb=None, p_cred=None, sh_id=None, qty=None, amt=None,
                 cur=None):

        if sh_mvt_id is None:
            self.sh_mvt_id = uuid.uuid4()
        else:
            self.sh_mvt_id = sh_mvt_id

        self.mvt_date = mvt_date
        self.p_deb = p_deb
        self.p_cred = p_cred
        self.sh_id = sh_id
        self.qty = qty
        self.amt = amt
        self.cur = cur

    def __repr__(self):
        return "<ShareMovement %s>" % self.sh_mvt_id
