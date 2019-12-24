from sources.template.controller import base_controller
from sources.template.model.user import User

class UserController(base_controller.BaseController):
    def __init__(self, params):
        pass
        self.user_ = User(params)

    def login(self, user_name, password):
        if not self._validate_login():
            return False
        return self.user_.login()

    def _validate_login(user_name, password):
        if user_name is None:
            return False
        if password is None:
            return False
        return True
    def logout(self):
        pass