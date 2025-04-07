from work_place import *
import math


class School(WorkPlace, Consts):
    def __init__(self, name):
        super().__init__(name)
        self.expertise = "school"

    def calc_capacity(self):
        self.capacity = int(math.floor(math.sqrt(self.level)))

    def calc_costs(self):
        self.costs = int(Consts.BASE_PLACE_COST * (math.floor(math.sqrt(self.level))))
        return self.costs
