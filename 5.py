def minmax(arr):
    data = arr
    res = []

    min_ = data[0]
    for item in arr:
        if ord(item) < ord(min_):
            min_ = item
    res.append(min_)

    max_ = data[0]
    for item in arr:
        if ord(item) > ord(max_):
            max_ = item
    res.append(max_)

    print(res)

data = ['z','g','h','b','d','f']
# data = ['a','b','c','d']
minmax(data)


