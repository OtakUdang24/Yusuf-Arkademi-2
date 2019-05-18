import string
import random
# parameter fungsi

def cetak(numbers):
    # chars   = string.ascii_uppercase
    chars2  = string.ascii_lowercase
    digit   = string.digits
    arrtxt = []
    for a in range(0, numbers):
        txt = ""
        for i in range(1,33):
            randm = random.randint(1,2)
            if randm == 1:
                tmp = random.choice(chars2)
                if tmp in txt:
                    stts = True
                    while stts:
                        new = random.choice(chars2)
                        if (new not in txt):
                            txt += new
                            stts = False
                else:
                    txt += tmp   
            else:
                tmp = random.choice(digit)
                if tmp in txt:
                    stts = True
                    while stts:
                        new = random.choice(digit)
                        if new != tmp:
                            txt += new
                            stts = False           
                else:
                    txt += tmp
        
        arrtxt.append(txt)
    print(arrtxt)
# argumen fungsi
cetak(2)
# digit   = string.digits
# print(random.choice(digit))