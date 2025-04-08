from person import *
import math


class Engineer(Person, Consts):
    def __init__(self, name, age):
        super().__init__(name, age)
        self.job = "engineer"

    def get_price(self):
        price = int(math.floor(Consts.BASE_PRICE[self.job] * math.sqrt(Consts.MIN_AGE / self.age)))
        return price

    def calc_life_cost(self):
        costs = int(math.floor(Consts.BASE_COST[self.job] * math.sqrt(self.age / Consts.MIN_AGE)))
        return costs

    def calc_income(self):
        income = int(math.floor(Consts.BASE_INCOME[self.job][self.work_place.get_expertise()] * math.sqrt(Consts.MIN_AGE / self.age)))
        return income