class Drug:
    def __init__(self, name: str, amount: int, price: int):
        self.name = name
        self.amount = amount
        self.price = price


class Pharmacy:
    def __init__(self, name: str):
        self.name = name
        self.drugs = list()
        self.employees = list()

    def add_drug(self, drug: Drug):
        self.drugs.append(drug)

    def add_employee(self, first_name: str, last_name: str, age: int):
        self.employees.append({
            "first_name" : first_name ,
            "last_name" : last_name ,
            "age" : age
        })

    def total_value(self) -> int:
        total = 0
        for d in self.drugs:
            total += d.amount * d.price
        return total

    def employees_summary(self) -> str:
        summary = "Employees:\n"
        for i, e in enumerate(self.employees, start=1):
            summary += "The employee number {} is {} {} who is {} years old.\n".format(i, e["first_name"], e["last_name"], e["age"])
        return summary