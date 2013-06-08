# -*- coding: utf-8 -*-
"""This module contains the controller classes of the application."""

# symbols which are imported by "from pingpong.controllers import *"
__all__ = ['Root']

# standard library imports
# import logging
import datetime
import psycopg2

# third-party imports
from turbogears import controllers, expose, flash

# project specific imports
# from pingpong import model
# from pingpong import jsonify


# log = logging.getLogger('pingpong.controllers')


class Root(controllers.RootController):
    """The root controller of the application."""

    @expose('pingpong.templates.welcome')
    def index(self):
        """Show the welcome page."""
        # log.debug("Happy TurboGears Controller Responding For Duty")
        flash(_(u"Your application is now running"))
        return dict(now=datetime.datetime.now())	


    @expose('pingpong.templates.listOfPlayers')
    def listOfPlayers(self):
        connection = psycopg2.connect("dbname=pingpong password=GJOUwF5b1G user=postgres host=/tmp/")
        cursor = connection.cursor()
        cursor.execute("SELECT * FROM player")
        result = cursor.fetchall()
        return dict(players = result)

