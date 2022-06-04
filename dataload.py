from operator import truediv
import random
import sys
from random import seed
from random import randint
import datetime
from datetime import date
from datetime import timedelta
from faker import Faker

import os
if os.path.exists("inputdata.sql"):
  os.remove("inputdata.sql")
f = open('inputdata.sql', 'w')
#sys.stdout = f
fake = Faker()
#insert into project values (null, title, summary, amount, starting_date, finish_date,0)
#insert into science_field values (null, canonical_name);
#insert into program values (null, prog_name, address);
#insert into researcher values (null, first_name, surname, sex, date_of_birth, 0);
#insert into organisation values (null, org_name, abbreviation, address, postal_code, city, budget, organisation_type);
#insert into executive values (null, exec_name);
#insert into phones values (***,phone_number);
#insert into deliverable values (null, title, summary, date_of_deliver);

project_names = ['Aphrodite','Ares','Artemis','Athena','Demeter','Dionysus','Hades','Hephaestus','Hera','Hermes','Poseidon','Zeus'
,'Aether','Aion','Chronos','Erebus','Eros','Gaia','Nemesis','Nyx','Tartarus','Uranus','Crius','Cronus','Hyperion'
,'Iapetus','Mnemosyne','Oceanus','Phoebe','Rhea','Tethys','Theia','Themis','Asteria','Atlas','Dione','Helios'
,'Selene','Eos','Epimetheus','Lelantos','Leto','Menoetius','Metis','Pallas','Perses','Prometheus','Styx','Alcyoneus'
,'Cthonius','Enceladus','Mimas','Picolous','Polybotes','Porphyrion','Thoas','Asterius','Antiphates','Geryon','Orion'
,'Talos','Tityos','Typhon','Amphiaraus','Askalaphos','Alecto','Tisiphone','Megaera','Hecate','Aiakos','Minos','Rhadamanthys'
,'Gorgyra','Orphne','Melinoe','Persephone','Acheron','Alpheus','Eridanos','Kokytos','Lethe','Phlegethon','Hypnos','Zagreus','Amphitrite'
,'Glaucus','Leucothea','Arethusa','Galene','Thetis','Nereus','Palaemon','Proteus','Triton','Aeolus','Ersa','Nephele','Plutus','Chiron','Iaso']
project_names.sort()

print(len(project_names))

program_names = ['Barbarossa','Blau','Braunschweig','Feuerzauber'
,'Hannibal','Konrad','Sonnenwende','Zitadelle','Bagration','Iskra'
,'Kutuzov','Lyuban','Mars','Jupyter','Polar Star','Saturn','Suvorov'
,'Uranus','Countenance','Culverin','Crimson','Dracula','Dukedom'
,'Silberfuchs','Carthage','Ambassador','Dynamo','Tannenbaum','Chess'
,'Colossus','Aflame','Chastise','Constellation','Pointblank','Astonia'
,'Clipper','Diver','Fusilade','Hurricane','Jericho','Loyton','Newton'
,'Overlord','Cobra','Epsom','Grouse','Totalize','Winsor','Pegasus','Amherst']

print(len(program_names))

researcher_names_m = ['Noah','Liam','Jacob','Mason','William'
,'Ethan','Michael','Alexander','James','Elijah','Daniel','Benjamin'
,'Aiden','Jayden','Logan','Matthew','David','Joseph','Lucas','Jackson'
,'Anthony','Joshua','Samuel','Andrew','Gabriel','Christopher','John'
,'Dylan','Carter','Isaac','Ryan','Luke','Oliver','Nathan','Henry','Owen'
,'Caleb','Wyatt','Christian','Sebastian','Jack','Jonathan','Landon'
,'Isaiah','Hunter','Levi','Aaron','Eli','Charles','Thomas','Connor'
,'Brayden','Nicholas','Jaxon','Jeremiah','Cameron','Evan','Adrian'
,'Jordan','Gavin','Grayson','Angel','Robert','Tyler','Josiah','Austin'
,'Colton','Brandon','Jose','Dominic','Kevin','Zachary','Ian','Chase'
,'Jason','Adam','Ayden','Parker','Hudson','Cooper','Nolan','Lincoln'
,'Xavier','Carson','Jace','Justin','Easton','Mateo','Asher','Bentley'
,'Blake','Nathaniel','Jaxson','Leo','Kayden','Tristan','Luis','Elias'
,'Bryson','Juan']
researcher_names_m.sort()

print(len(researcher_names_m))

researcher_names_f = ['Emma','Sophia','Olivia','Isabela','Ava','Mia'
,'Abigail','Emily','Madison','Charlotte','Elizabeth','Amelia','Chloe'
,'Ella','Evelyn','Avery','Harper','Grace','Addison','Victoria','Natalie'
,'Lily','Aubrey','Lillian','Zoey','Hannah','Layla','Brooklyn','Samantha'
,'Zoe','Leah','Scarlett','Riley','Camila','Savannah','Anna','Audrey'
,'Allison','Aria','Gabriella','Hailey','Claire','Sarah','Aaliyah'
,'Kaylee','Nevaeh','Penelope','Alexa','Bella','Nora','Ellie','Ariana'
,'Lucy','Mila','Peyton','Genesis','Alyssa','Taylor','Violet','Maya'
,'Caroline','Madelyn','Skylar','Serenity','Ashley','Brianna','Kennedy'
,'Autumn','Eleanor','Kylie','Sadie','Paisley','Julia','Mackenzie'
,'Naomi','Eva','Katherine','Gianna','Melanie','Piper','Ruby','Lydia'
,'Alexandra','Madeline','Hazel','Lauren','Annabelle','Jasmine','Aurora'
,'Sydney','Bailey','Luna','Maria','Morgan','Kimberly','Andrea','Elena'
,'Eliana','Vivian','Molly']
researcher_names_f.sort()

print(len(researcher_names_f))

surnames = ['Smith','Taylor','Jones','Wilson','Wright'
,'Johnson','Williams','Clarke','King','Green','Martin'
,'White','Hall','Clark','Chapman','Turner','Jackson'
,'Cooper','Ward','Edwards','Thompson','Baker','Robinson'
,'Moore','Allen','Wlker','Davies','Carter','Lee','Harris'
,'Roberts','Evans','Webb','Scott','Watson','Hill','Cook'
,'Parker','Wood','Day','Young','Palmer','Richardson','Cox'
,'Harrison','Miller','Barnes','Morris','Marshall','Phillips'
,'Lewis','Gray','Fisher','Hughes','Anderson','Davis','Mitchell'
,'Bell','James','Adams','Bennett','Howard','Collins','Barker'
,'Hunt','Mills','Matthews','Butler','Newman','Reynolds','Ellis'
,'Mason','Holmes','Morgan','Burton','Lawrence','Harvey','Payne'
,'Fox','Norman','Stevens','Pearson','Foster','Cole','Russell'
,'West','Shaw','Fuller','Simpson','Page','Reed','Rose','Woods'
,'Peacock','Rogers','Arnold','Hart','Wells','Bates','Price']
print(len(surnames))

science_field = ['Genetics','Physiopathology','Biochemistry'
,'Genetic engineering','Computer science','Data processing'
,'Electrical engineering','Statistics','Mechanical engineering'
,'Behavioral psychology','Astronomy','Geological sciences'
,'Chemical engineering', 'Medicine', 'Electronics', 'Economics']

print(len(science_field))

organisations = ['Alpha','Beta','Gamma','Delta','Epsilon','Zeta','Heta','Theta'
,'Iota','Kappa','Lambda','Mi','Ni','Ksi','Omikron','Pi'
,'Rho','Sigma','Tau','Ypsilon','Phi','Chi','Psi','Omega'
,'Apple','Samsung','Microsoft','Foxconn','Alphabet','Huawei','Dell','Meta'
,'Sony','Hitachi','Intel','IBM','Tencent','Panasonic','Lenovo','HP'
,'Johnson and Johnson', 'UnitedHealth', 'CVS Health', 'Pfizer','Novartis','Anthem'
,'GlaxoSmithKline','Cigna','AstraZeneca','Merck']

print(len(organisations))

cities = ['Athens','Nicosia','Roma','Madrid','Lisbon','Bern','Paris'
,'Dublin','Oslo','Wien','Stockholm','Helsinki','Copenhagen'
,'Warsaw','Bratislava','Prague','Budapest','Ljubljana','Zagreb'
,'Belgrade','Sarajevo','Podgorica','Tirana','Skopje','Sofia'
,'Bucharest','Kiev','Minsk','Moscow','Vilnius','Riga','Talinn'
,'Ankara','Yerevan','Tbilisi','Baku','Damascus','Tel Aviv'
,'Cairo','Tripoli','Beijing','Tokyo','Seoul','Anoi','Delhi','Tehran','Bagdat','Jakarta','Tunis','Algiers']

print(len(cities))

executive_names = ['Aemilianus','Aemilius','Aetius','Agrippa','Ahenobarbus'
,'Antoninus','Aquila','Augusta','Aulus','Aurelius','Brutus','Caecilius'
,'Caelius','Calvus','Cassius','Cato','Cornelius','Cicero','Diocletianus'
,'Domitius','Drusus','Fabianus','Faustus','Felix','Flavius','Gaius'
,'Hadrianus','Julius','Laurentius','Livius','Lucius','Lucilla'
,'Lucretius','Marcia','Marcianus','Marina','Maxentius','Maximus'
,'Octavianus','Ovidius','Paulus','Pomponia','Priscilla','Quintus'
,'Rufus','Sabina','Seneca','Septimus','Sergius','Severina']

print(len(executive_names))

deliverables = ['AC coupling','ADC','amplifier','anode','AWG','barrie potential'
,'bipolar junction transistor','bridge rectifier','buffer','capacitor','cathode'
,'clipper','collector','common drain amplifier','CMOS','comparator','current amplifier'
,'Darlington pair','depletion mode','differentiator',' enhancement-mode MOSFET','feedback amplifier'
,' h-parameters','impedance',' inverting amplifier','L-C tank circuit','line regulation','majority carriers'
,'Monostable','Open-loop gain','potentiometer','recombination','rectification','regulator','reverse bias','SDRAM'
,'solid state','varactor diode','voltage divider','voltage multiplier','RAM','ROM','benchmark','binary tree'
,'digital signal processing','encryption','evolutionary computing','game theory','graph theory','hash function']

print(len(deliverables))

def proj_dates():
    start_year = randint(2019,2022)
    if (start_year == 2022):    
        start_month = randint(1,date.today().month)
        if (start_month == date.today().month):
            start_day = randint(1,date.today().day)
        else:
            if (start_month == 1 or start_month == 3 or start_month == 5 or start_month == 7 or start_month == 8 or start_month == 10 or start_month == 12):
                start_day = randint(1,31)
            elif (start_month == 2):
                if (start_year % 4 == 0):
                    start_day = randint(1,29)
                else:
                    start_day = randint(1,28)
            else:
                start_day = randint(1,30)
    else:
        start_month = randint(1,12)
        if (start_month == 1 or start_month == 3 or start_month == 5 or start_month == 7 or start_month == 8 or start_month == 10 or start_month == 12):
            start_day = randint(1,31)
        elif (start_month == 2):
            if (start_year % 4 == 0):
                start_day = randint(1,29)
            else:
                start_day = randint(1,28)
        else:
            start_day = randint(1,30)
    starting_date = datetime.date(start_year,start_month,start_day)
    finish_date = starting_date + datetime.timedelta(days = randint(365,1460))
    return (starting_date,finish_date)

#projects & deliverable
f.write("insert into project values (1,'"+project_names[0]+"','"+fake.sentence()+"', 67497.0,'2019-5-16','2021-4-4',0);\n")
f.write("insert into deliverable values (3001,1,'"+deliverables[0]+"','"+fake.sentence()+"','2021-4-4');\n")


dates_for_eval = ['2019-4-4']
for i in range(1,100):
    (st,fi) = proj_dates()
    init = "insert into project values (null,'"+project_names[i]+"','"+fake.sentence()+"',"+str(randint(10000,100000)*1.0)+",'"+str(st)+"','"+str(fi)+"',0);\n"
    f.write(init)
    dates_for_eval.append(st + datetime.timedelta(days = randint(-40,0)))
    if(i < 41):    
        finish_date = fi + datetime.timedelta(days = randint(0,365))
        f.write("insert into deliverable values ("+str(i+3001)+","+str(i+1)+",'"+deliverables[i]+"','"+fake.sentence()+"','"+str(finish_date)+"');\n")
    
#science_fields
f.write("insert into science_field values (501,'"+science_field[0]+"');\n")
for i in range(1,16):
    f.write("insert into science_field values (null,'"+science_field[i]+"');\n")

#program

f.write("insert into program values (601,'"+program_names[0]+"','"+fake.address()+"');\n")
for i in range(1,50):
    f.write("insert into program values (null,'"+program_names[i]+"','"+fake.address()+"');\n")

#researcher

def researcher_dates():
    year = randint(1965,1995)
    month = randint(1,12)
    if (month == 1 or month == 3 or month == 5 or month == 7 or month == 8 or month == 10 or month == 12):
        day = randint(1,31)
    elif (month == 2):
        if (year % 4 == 0):
            day = randint(1,29)
        else:
            day = randint(1,28)
    else:
        day = randint(1,30)
    full_date = datetime.date(year,month,day)
    return full_date

f.write("insert into researcher values (801,'"+researcher_names_m[0]+"','"+surnames[0]+"','male','1992-5-28',0);\n")
for i in range(1,100):
    res_date = researcher_dates()
    f.write("insert into researcher values (null,'"+researcher_names_m[i]+"','"+surnames[i]+"','male','"+str(res_date)+"',0);\n")
for i in range(0,100):
    res_date = researcher_dates()
    f.write("insert into researcher values (null,'"+researcher_names_f[i]+"','"+surnames[i]+"','female','"+str(res_date)+"',0);\n")

#organisation

types = ['research center','university','company']
holder = 101
f.write("insert into organisation values (2001,'"+organisations[0]+"','"+organisations[0][0]+organisations[0][1]+"','"+fake.address()+"',100,'London','research center');\n")
f.write("insert into budgetres values (2001,"+str(randint(500000,1000000)*1.0)+","+str(randint(500000,4000000)*1.0)+");\n")
for i in range(1,50):
    temp = randint(0,2)
    temp_b = randint(100000,999999)
    f.write("insert into organisation values (null,'"+organisations[i]+"','"+organisations[i][0]+organisations[i][1]+"','"+fake.address()+"',"+str(holder)+",'"+cities[i]+"','"+types[temp]+"');\n")
    holder = holder+1
    if(types[temp] == "university"):
        f.write("insert into budgetu values ("+str(2001+i)+","+str(randint(200000,2000000)*1.0)+");\n")
    elif(types[temp] == "research center"):
        f.write("insert into budgetres values ("+str(2001+i)+","+str(randint(500000,1000000)*1.0)+","+str(randint(500000,4000000)*1.0)+");\n")
    else:
        f.write("insert into budgetcom values ("+str(2001+i)+","+str(randint(1000000,5000000)*1.0)+");\n")
#phones
phone = 6900000001
for i in range(2001,2051,1):   
    f.write("insert into phones values ("+str(i)+",'"+str(phone)+"');\n")
    phone = phone + 1       

#executives

f.write("insert into executive values (2401,'"+executive_names[0]+"');\n")
for i in range(1,50):
    f.write("insert into executive values (null,'"+executive_names[i]+"');\n")

#-------------------------------------------------------------------------------------

#relations..........

#licensing

licensing_values = [1,3,2,4,1,1,3,3,2,1,2,1,3,2,1,5,3,2,1,1,2,2,1,2,3,2,1,2,2,3,2,3,1,2,4,2,3,1,1,1,1,2,1,3,2,2,1,3,2,1]

proj_id = 1
for i in range(0,50,1): 
    for j in range (0,licensing_values[i],1):
        f.write("insert into licensing values ("+str(proj_id)+","+str(601+i)+");\n")
        proj_id += 1

#administration

organisation_values = [2,4,1,2,1,1,2,1,3,4,1,2,3,2,3,2,1,2,1,1,1,2,2,2,3,2,3,2,5,2,2,1,1,1,2,1,2,3,1,1,1,2,3,2,1,5,4,2,1,1]
proj_admin = []
proj_id = 1
for i in range(0,50,1): 
    for j in range (0,organisation_values[i],1):
        proj_admin.append(i)
        f.write("insert into administration values ("+str(proj_id)+","+str(2001+i)+");\n")
        proj_id += 1

#employee

employee_values = [4,4,8,2,6,6,5,3,5,4,6,2,5,7,3,3,6,4,1,5,1,3,6,2,3,2,3,4,5,2,3,5,2,4,2,9,7,3,3,2,3,2,3,3,2,8,4,6,6,3]
re_id = 1
employee_of = []
for i in range(0,50,1): 
    for j in range (0,employee_values[i],1):
        employee_of.append(i)
        f.write("insert into employee values ("+str(re_id+800)+","+str(2001+i)+");\n")
        re_id += 1

#administration_ex

executive_values = [2,1,2,1,2,1,3,1,3,2,1,2,3,3,2,3,1,2,1,2,1,1,2,3,3,2,3,2,5,2,2,4,2,1,3,1,2,3,2,2,1,1,2,2,2,2,3,1,1,1]

proj_id = 1
for i in range(0,50,1): 
    for j in range (0,executive_values[i],1):
        f.write("insert into administration_ex values ("+str(proj_id)+","+str(2401+i)+");\n")
        proj_id += 1

#in_field

project_field = [2,1,1,1,2,1,1,1,2,2,1,2,2,1,1,2,1,2,1,2,1,1,2,2,2,2,1,2,2,2,2,2,2,1,2,1,2,2,2,2,1,1,2,2,2,2,2,1,1,1,2,1,2,1,2,1,2,1,1,2,1,2,2,1,2,2,1,2,1,2,1,1,2,2,2,2,1,2,2,2,2,1,2,1,2,1,2,2,2,2,1,1,2,2,2,2,1,1,1,1]
temp_nums = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15]
for i in range(1,101,1):
    fields = random.sample(temp_nums,project_field[i-1]) 
    for fie in fields:
        f.write("insert into in_field values ("+str(i)+","+str(501+fie)+");\n")

#works_on & director
print(len(dates_for_eval))
res_st = []
for i in range(1,201,1):
    res_st.append(i)
project_occ = [4,3,4,3,4,5,6,4,4,7,5,4,3,3,5,5,6,4,7,8,5,4,3,3,6,5,4,5,4,4,4,4,3,4,5,6,5,4,6,4,5,4,5,6,5,6,5,7,5,4,4,4,3,6,6,5,4,3,3,3,6,5,5,4,4,6,3,3,6,7,6,8,5,4,6,5,6,4,6,4,5,6,4,5,4,6,3,3,3,5,4,4,5,5,5,4,4,4,4,3]
for i in range(1,101,1):
    researchers = random.sample(res_st,project_occ[i-1])
    f.write("insert into science_director values ("+str(i)+","+str(800+researchers[0])+");\n")
    for j in range(1,len(researchers)-1,1):
        f.write("insert into works_on values ("+str(i)+","+str(800+researchers[j])+");\n")
#eval
    flag = False
    while(not flag):
        sugg = randint(1,200)
        if sugg not in researchers:
            if (employee_of[sugg-1] != proj_admin[i-1]):
                score = "{:.2f}".format(random.random()*10)
                ev_date = dates_for_eval[i-1]
                f.write("insert into evaluation values ("+str(i)+","+str(800+sugg)+",'"+ str(ev_date) +"',"+score+");\n")
                flag = True
f.close()
print("finish")

