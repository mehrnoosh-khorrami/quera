from work_place import *
import math


class Mine(WorkPlace, Consts):
    def __init__(self, name):
        super().__init__(name)
        self.expertise = "mine"

    def calc_capacity(self):
        self.capacity = int(math.pow(self.level, 2))

    def calc_costs(self):
        self.costs = int(Consts.BASE_PLACE_COST + Consts.LEVEL_MUL * self.level)
        return self.costs
