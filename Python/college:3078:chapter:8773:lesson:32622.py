class ExceptionProxy(Exception):
    def __init__(self, message, function):
        super().__init__()
        self.msg = message
        self.function = function


def transform_exceptions(func_ls):
    func_exceptions = list()
    for func in func_ls:
        try:
            func()
        except Exception as e:
            g = ExceptionProxy(str(e), func)
            func_exceptions.append(g)
        else :
            f = ExceptionProxy("ok!", func)
            func_exceptions.append(f)
    return func_exceptions