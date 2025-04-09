import math


class Person:
    # Class variable to keep track of all instances
    # This will be a list of all Person instances
    instances = []

    def __init__(self, name, age):
        self.name = name
        self.age = age
        self.level = 1
        self.job = ""
        self.work_place = None
        # Add the instance to the list of instances
        Person.instances.append(self)

    def do_level(self, income):
        return (income * (math.sqrt(self.level * self.work_place.level)))

    def calc_income(self):
        pass

    def calc_life_cost(self):
        pass

    def calc(self):
        return self.do_level(self.calc_income()) - self.calc_life_cost()

    def get_job(self):
        return self.job

    def upgrade(self):
        self.level += 1

    @staticmethod
    def calc_all():
        sum_calc = 0
        for p in Person.instances:
            sum_calc += p.calc()
        return sum_calc
