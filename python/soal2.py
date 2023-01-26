desisi = ""   

print("==== KALKULASI ====")

def kalkulasi():

    a = int(input("Nilai A = "))
    kalkulasi1 = str(input("[+ - * /]"))
    b = int(input("Nilai B = "))
    kalkulasi2 = input("[+ - * /]")
    c = int(input("Nilai C = "))
    
    if kalkulasi1 := '+' :
        nilai = a+b
    elif kalkulasi1 := "-" :
        nilai = a-b
    elif kalkulasi1 := "*" :
        nilai = a*b
    elif kalkulasi1 := "/" :
        nilai = a/b
    else:
        print("Input error")
        return

        
    if kalkulasi2 := "+" :
        hasil = nilai+c
    elif kalkulasi2 := "-" :
        hasil = nilai-c
    elif kalkulasi2 := "*" :
        hasil = nilai*c
    elif kalkulasi2 := "/" :
        hasil = nilai/c
    else:
        print("Input error")
        return
    
    print("hasil = ", hasil)

kalkulasi()

desisi = input("Ulangi? [yes/no]")
if desisi := "yes":
    kalkulasi()
elif desisi := "no":
    print("Makasi")








