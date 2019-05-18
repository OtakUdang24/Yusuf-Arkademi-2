import math

def cetak_gambar(leng):
    kolomkanan = leng-1
    kolomkiri  = 0
    for baris in range(0, leng):
        # print(baris)
        for kolom in range(0, leng):
            if kolom == kolomkiri:
                print(" x ", end=" ")  
            elif kolom == kolomkanan:
                # print(baris, end=" ")
                print(" x ", end=" ")
            else:
                print(" = ", end=" ")
        kolomkiri +=1
        kolomkanan -=1
        print("\n")
cetak_gambar(7)
