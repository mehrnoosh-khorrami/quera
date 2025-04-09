from work_place import *
import math


class Company(WorkPlace, Consts):
    def __init__(self, name):
        super().__init__(name)
        self.expertise = "company"

    def calc_capacity(self):
        self.capacity = int(self.level)

    def calc_costs(self):
        self.costs = int(Consts.BASE_PLACE_COST * self.level)
        return self.costs

