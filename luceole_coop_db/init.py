import os
from luceole_coop_db import Application
if __name__ == '__main__':
    filepath = 'sqlite:///sqlalchemy_example.db'
    app = Application(filepath)
