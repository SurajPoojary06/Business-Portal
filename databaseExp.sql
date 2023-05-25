

-- Creating Table for Feedback Details
CREATE TABLE `userinfodata`(           
`user` varchar(100) NOT NULL,
`email` varchar(100) NOT NULL,
`message` varchar(100) NOT NULL
);

-- Creating Table for Register values for the users
CREATE TABLE `registered_users` (
`fullname` varchar(100) PRIMARY KEY,
`username` varchar(100) NOT NULL,
`email` varchar(100) UNIQUE NOT NULL,
`password` varchar(100) NOT NULL
);



-- Food Sector Table and Values Deatils:
CREATE TABLE `food_details` (
`Comp_name` varchar(255) NOT NULL,
`Address` varchar(255) NOT NULL,
`website` varchar(255) NOT NULL,
`Phone` varchar(255) NOT NULL,
`Email` varchar(255) NOT NULL,
`Name` varchar(255) NOT NULL
);

INSERT INTO `food_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`, `Name`) VALUES ('SRI BHAGYALAKSHMI GROUP','#345/1, Mysore Road, Opp. Bhel,Bangalore 560026',
'www.bahagyalakshmigroup.com','91-80-26741561','trade@bhagyalakshmigroup.com','Mr. Srinivas Gupta');
INSERT INTO `food_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`, `Name`) VALUES ('SWASTIKS MASALAS PICKLES & FOOD PRODUCTS PVT.LTD.','Swastik House, 12, Jain Temple Street, V.V. Puram,Bangalore 560004',
'www.swastiks.com','91-80-26609580/26675453','swastiks@mantraonline.com','Mr. Vankatacharyapathi , Mr. Sridhar');
INSERT INTO `food_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`, `Name`) VALUES ('VIVEK AGRO FOODS','S-4, 2Nd Floor, Red Cross Bhavan, Esteem Arcade Race Cource Road, Bangalore 560001',
'www.hourworld.com','91-80-22207007/22207022','software@hourworld.com','Mr. Nishant Jain');
INSERT INTO `food_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`, `Name`) VALUES ('GOOD BREAD LTD.','31/1, J. P. Nagar, Ii Phase, Marenahalli, Bangalore 560078',
'www.mayuragoods.com','91-80-26597787/26490066','NA','Mr. G. Srinivasa Rao');
INSERT INTO `food_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`, `Name`) VALUES ('R.T.N. HOME FOOD PRODUCTS','#201, Tejas Building, Sonnegowda Layout, Kodigehalli,Sahakar Nagar, Bangalore 560092',
'www.tejasmasala.com','91-80-41758035','rtnhomefoodproducts@rediffmail.com','Mr. N. C. Sridhar');
INSERT INTO `food_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`, `Name`) VALUES ('RAJ SHRI FOODS PRIVATE LTD.','17, Platform Road, Bangalore 560020',
'www.saideep.com','91-80-23317793/23317795','rajashrifood@satyam.net.in','Mr. M R Arvind');
INSERT INTO `food_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`, `Name`) VALUES ('SUNIL AGRO FOODS LTD.','1/104, Ahuja Chambers, Kumara Krupa Road, Bangalore 560001',
'www.sunilagro.com','91-80-27971371/27971463','msbhatt@sunilagro.com, pramodjain@sunilagro.com','Mr. M. S. Bhatt, Mr. Pramod Kumar, Mr. Sunil');
INSERT INTO `food_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`, `Name`) VALUES ('MAYURA FOOD PRODUCTS','7-D, 21St A, Main, Marenahalli, J.P. Nagar, 2Nd Phase,Bangalore 560078',
'www.mayurafoods.com','91-80-22977715/16','mfppl05@sify.com','Mr. Venkatesh');
INSERT INTO `food_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`, `Name`) VALUES ('MAHAVIR COCONUT INDUSTRIES','Porwal House, M.G. Road, Tumkur 572101',
'www.maxcareindia.com','91-816-2206555/2261456','mcimangal@hotmail.com','Mr. Anil Porwal');
INSERT INTO `food_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`, `Name`) VALUES ('ACE FOODS PVT. LTD.','C-30, Industrial Estate, Yeyyadi, Mangalore 575008',
'www.acefoodspl.com','91-8242211578','NA','Mr. B. V. Shenoy, Dr. Kasturi Umesh Pai');





-- Household Sector Table and Values Deatils:
CREATE TABLE `household_details` (
`Comp_name` varchar(255) NOT NULL,
`Address` varchar(255) NOT NULL,
`Phone` varchar(255) NOT NULL,
`Email` varchar(255) NOT NULL,
`Name` varchar(255) NOT NULL
);

INSERT INTO `household_details` (`Comp_name`,`Address`,`Phone`,`Email`,`Name`) VALUES ('SHRESHT MOTORITE PVT. LTD.', '82, 17Th Main Road, Bsk 1St Stage, 2Nd Block, Bangalore,560050',
'908026629948','vrdmurti@satyam.net.in','Mr. Dakshna Moorthy');
INSERT INTO `household_details` (`Comp_name`,`Address`,`Phone`,`Email`,`Name`) VALUES ('SHINAG ALLIED ENTERPRISES','13/3 & 14/1, Khate 2, Avalahalli Village,Uttarahalli, Hobli, South Taluk, Bangalore 560062',
'91-80-32903170/32964501','shinag@vsnl.net','Mr. Sanjay Gandhi');
INSERT INTO `household_details` (`Comp_name`,`Address`,`Phone`,`Email`,`Name`) VALUES ('VENUS GAS APPLIANCES','Sawan, F-67/15A, Gurkar Devana Street, Fort Mohalla,Mysore 570004',
'91-821-446027','vinodmaroli@venusgas.com','Vinod Maroli');
INSERT INTO `household_details` (`Comp_name`,`Address`,`Phone`,`Email`,`Name`) VALUES ('THERMO TECHNIC','#59/7,-23, Viratanagar, Behind Annapoorneshwari,Temple Kodi Chikkanahalli Road, Bommanahalli, Bangalore',
'91-80-25736210','sreenivasa_m@dataone.in','Mr. M. Srinivasa');
INSERT INTO `household_details` (`Comp_name`,`Address`,`Phone`,`Email`,`Name`) VALUES ('SAN ENGINEERS','D-319, Iind Gate, Industrial Estate, Gokul Road, Hubli,580030',
'91-836-2330772','amaresh_noolvi@yahoo.co.in','Mr. Amaresh Noolvi');
INSERT INTO `household_details` (`Comp_name`,`Address`,`Phone`,`Email`,`Name`) VALUES ('GUPTA ELECTRICALS','28, V.S. Lane, Chickpet, Cross, Bangalore 560053',
'91-80-22262479/41475277','NA','Mr. K. P. Narendra');
INSERT INTO `household_details` (`Comp_name`,`Address`,`Phone`,`Email`,`Name`) VALUES ('XCLEEN PRODUCTS INDIA PVT. LTD.','#8, 1St Cross, Annipura Main Road, Sudhama Nagar,Bangalore 560027',
'91-80-41248430','shashiaravind@yahoo.com','Mr. Shashi Dhar');
INSERT INTO `household_details` (`Comp_name`,`Address`,`Phone`,`Email`,`Name`) VALUES ('WOODS INCORPORATION','# 38, Cmh Road, 2Nd Stage, Indiranagar, Bangalore,560038',
'91-80-41521525','oaknoak@gmail.com','Mr. Vijay');
INSERT INTO `household_details` (`Comp_name`,`Address`,`Phone`,`Email`,`Name`) VALUES ('GEMINI PLASTIC INDUSTRIES','P.B. No.100, 6/568 A, Gemini Square, Kavumbagam,Thalassery 670110',
'914902341903/2341395','NA','Mr. C. Govindan , Mr. K. Ramesh Kumar');
INSERT INTO `household_details` (`Comp_name`,`Address`,`Phone`,`Email`,`Name`) VALUES ('ZENITH ELECTRICAL SYSTEMS','No. 113, 7Th Mile Stone, Kanakapura Road, Opp. J. C.,Industrial Estate, Yelachenahalli Post, Bangalore 560062',
'91-80-26323621','zenith_1997@rediffmail.com','Mr. K.V.V. Chalapathi & Mr. Raju');


-- Energy&Power Sector Table and Values Deatils:
CREATE TABLE `Energy_Power_details` (
`Comp_name` varchar(255) NOT NULL,
`Address` varchar(255) NOT NULL,
`Phone` varchar(255) NOT NULL,
`Email` varchar(255) NOT NULL,
`Name` varchar(255) NOT NULL
);

INSERT INTO `Energy_Power_details` (`Comp_name`,`Address`,`Phone`,`Email`,`Name`) VALUES ('PENNZOIL-QUAKER STATE','No.19, New Timber Yard Layout, Behind Feather Lite,Industries, Mysore Road, Bangalore 560026',
'91-80-26754422','pkraji@rediffmail.com','Mr. T. K. Rajish');
INSERT INTO `Energy_Power_details` (`Comp_name`,`Address`,`Phone`,`Email`,`Name`) VALUES ('ORGANO SUBLIMO EXTRACTS','Plot No. N-2, Baikampady Indl. Area, Mangalore 575011',
'91-824-2407570','vinaykonchady@yahoo.com','Mr. Vinayak Kumar Rao');
INSERT INTO `Energy_Power_details` (`Comp_name`,`Address`,`Phone`,`Email`,`Name`) VALUES ('SRI VENKATESHWARA ENGINEERINGS','#106/6, 1St Cross, Begur Road, 1St Main, Bommanahalli,Hosur Road, Bangalore 560068',
'91-80-25732881/65365578','venkateshwaraengg@rediffmail.com','Mr I. Jaganath, Mr. Vishal');
INSERT INTO `Energy_Power_details` (`Comp_name`,`Address`,`Phone`,`Email`,`Name`) VALUES ('LEONARDO AUTOMATION (INDIA) PVT. LTD','No. 27, 1St Main Road, Kamakshipalya, Magadi Road,Bangalore 560079',
'91-80-23287161/23283030','leoauto@vsnl.com','Mr. Swamynathan Harish');
INSERT INTO `Energy_Power_details` (`Comp_name`,`Address`,`Phone`,`Email`,`Name`) VALUES ('TIRUPATI CHEMICALS','7/7, Sushila Road, 1St Cross, Doddamavalli, (Near J.C.Road Corp. Car Parking), Bangalore 560004',
'91-80-41123220/22293121','tirupatichemicals@vsnl.com','Mr. M. P. Agarwal, Mr. Anupam Agarwal');
INSERT INTO `Energy_Power_details` (`Comp_name`,`Address`,`Phone`,`Email`,`Name`) VALUES ('STANDARD OIL ADDITIVES LTD.','13/14, Behind Ganesh Temple, N.S. Palya, Ii Stage, B.T.M.Layout, Bangalore 560076',
'91-80-26684257/26684261','soapl@blr.vsnl.net.in','Mr. Girimaji S. Ravi');
INSERT INTO `Energy_Power_details` (`Comp_name`,`Address`,`Phone`,`Email`,`Name`) VALUES ('SATI POLYMER','# 175/6, Radha Complex, 1St Floor, Bommanahalli, Hosur Service Road, Bangalore 560068',
'91-80-41119565/41315565','sati_polymer@yahoo.co.in','Mr. Vivek Jhajharia');
INSERT INTO `Energy_Power_details` (`Comp_name`,`Address`,`Phone`,`Email`,`Name`) VALUES ('COLOMBIA PETROCHAMP','Manipal Center, South Block 404, Dickenson Road,Bangalore 560052',
'91-80-25550288','NA','Mr. Sham Sunder, Mr. Kuldeep');
INSERT INTO `Energy_Power_details` (`Comp_name`,`Address`,`Phone`,`Email`,`Name`) VALUES ('INDO METAL LUBRICANTS','B-35, Industirl Estate, Peenya Iii Stage,Bangalore 560058',
'91-80-28360021/23444543','NA','Mr. B. Chandra Hasa Sheety');
INSERT INTO `Energy_Power_details` (`Comp_name`,`Address`,`Phone`,`Email`,`Name`) VALUES ('MANGALORE REFINERY AND PETROCHEMICALS LTD.','Kuthethoor P.O. Via Katipalla, Mangalore 575030',
'91-824-2270400/91-11-23463100','mrplmlr@mrplindia.com','Mr. R. S. Sharma, Mr. Anil Dubey, Mr. Ravi K. Kastia');


-- Leather Sector Table and Values Deatils:
CREATE TABLE `Leather_details` (
`Comp_name` varchar(255) NOT NULL,
`Address` varchar(255) NOT NULL,
`website` varchar(255) NOT NULL,
`Phone` varchar(255) NOT NULL,
`Email` varchar(255) NOT NULL,
`Name` varchar(255) NOT NULL
);

INSERT INTO `Leather_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`,`Name`) VALUES ('MNS EXPORTS PVT. LTD.','No.46/1, Jaraganahalli, Kanakapura Main Road, Bangalore,560078',
'www.mnsexports.com','91-80-26713743/26713851','vishal@mnsexports.com','Mr. E. N. Veeranna');
INSERT INTO `Leather_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`,`Name`) VALUES ('TARSHISH EXPORTS','No. 188, 9Th Floor, 8Th Cross, B.E.M.L., 3Rd Stage, Raja Rajeshwari Nagar, Bangalore 560098',
'www.tarshishexports.com','91-80-28605811','sunil@tarshishexports.com','Mr. Sunil Mande');
INSERT INTO `Leather_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`,`Name`) VALUES ('SLEEP-ON','No. 691, 7Th Main, Hmt Layout, Rt Nagar, Bangalore 560032',
'www.sleep-on.com','91-80-23331190/23332166','sleeponcoir@gmail.com','Mr. K J Mathew');
INSERT INTO `Leather_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`,`Name`) VALUES ('SHARP SALMON PTY. LTD.','20/6, 3Rd Cross, Lavelle Rd., Bangalore 560042',
'www.sharpsalmon.com','91-80-41320946','sarah_dawkins@hotmail.com','Ms. Sarah Penelope Salmon');
INSERT INTO `Leather_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`,`Name`) VALUES ('SANSHI EXIM PVT. LTD.','Sanshi House 78/1, Benson Cross Road, Bangalore',
'www.sanshiexport.com','91-80-23537516/23537039/51289430','rameshmanchanda@airtelbroadband.in','Mr. Ramesh Manchanda');
INSERT INTO `Leather_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`,`Name`) VALUES ('P.S.ENTERPRISES','No.53, 4Th Cross, Telecom Layout Kempapura Agrahara,Vijayanagar, Bangalore 560023',
'www.psenter.com','91-80-23142692','prakashkothari75@yahoo.co.in','Mr. Prakash Chand Kothari');
INSERT INTO `Leather_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`,`Name`) VALUES ('NETWARE SYSTEMS PVT. LTD.','No. 97, Wheelers Road, Coxtown, Bangalore 560005',
'www.netwaresystems.biz','91-80-25804901/25804902','madhavanns@netwaresystems.biz,shabbir_458@hotmail.com','Mr. Madhavan N S, Mr. Shabbir Ahmed');
INSERT INTO `Leather_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`,`Name`) VALUES ('KRM INTERNATIONAL LTD.','Unit-Ii, 360/361, Iv Phase, Peenya Indl. Area, Bangalore,560058',
'www.krmshoes.com','91-80-41272022/2023','krmroots@yahoo.co.in','Mr. B. P. Ramesh');
INSERT INTO `Leather_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`,`Name`) VALUES ('STANLEY SEATING','No.- 12/7, Shama Rao Complex, Mission Road, Bangalore,560027',
'www.stanleyseating.com','91-80-22100750/22226237','girish@stanleyseating.com, stanleyseating@vsnl.net','Mr. Girish K. C., Mr. Sunil Suresh');
INSERT INTO `Leather_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`,`Name`) VALUES ('EASUN LEATHER PRODUCTS & EXPORTS LTD.','147, Sector V, H.S.R. Layout, Bangalore 560034',
'www.bulchee.com','91-80-41109110/41109114','NA','Mr. Sangieve Bulchandni');



-- Computer Software/Hardware Sector Table and Values Deatils:
CREATE TABLE `Computer_details` (
`Comp_name` varchar(255) NOT NULL,
`Address` varchar(255) NOT NULL,
`website` varchar(255) NOT NULL,
`Phone` varchar(255) NOT NULL,
`Email` varchar(255) NOT NULL,
`Name` varchar(255) NOT NULL
);

INSERT INTO `Computer_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`,`Name`) VALUES ('N. J. DATAPRINT (BLR) PVT. LTD.','No. 6, Mla Layout, Rt Nagar, Bangalore 560032',
'www.njgroup.net','91-80-23434014/23435008','njgroup@vsnl.com','Mr. V. N. Gokul Kumar'); 
INSERT INTO `Computer_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`,`Name`) VALUES ('XIMAX AUTOMATION PVT. LTD.','106, Annex Bldg., Kodandarana Complex,Gandhi Bazaar Main Road, Basavanagudi, Bangalore',
'www.ximaxindia.com','91-80-26608679','manjunath@ximaxindia.com','Ms. Manjunath M.');
INSERT INTO `Computer_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`,`Name`) VALUES ('SAVEX COMPUTERS LTD.','8, Mota Chambers, 9 Millers Road, Bangalore 560052',
'www.savex.org','91-80-41514630/22286434','cdrao_savex@hotmail.com, savexblr@vsnl.net.in','Mr. Chakradhara Rao, Mr. Anil , Mr. Santosh');
INSERT INTO `Computer_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`,`Name`) VALUES ('BICRON INDUSTRIAL COMPANY','# 3, Nandini Mansion, Airport-Itpl Main Road, Marathahalli,Bangalore 560037',
'www.bicronindia.com','91-80-25230669/25223056','NA','Mr. T. Gunashekar, Mr. T. Selvam');


INSERT INTO `Computer_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`,`Name`) VALUES ('NUMAG DATA SYSTEMS PRIVATE LIMITED','120/1, 2Nd Floor, Near Sharda Homes, Apartment Main Road, Malleshpolya, Bangalore 560075',
'www.numagdata.com','91-80-28250292/25340939','numag@vsnl.com,numag@vsnl.net','Mr. Ganeshan K.,Mr. Ganesh');
INSERT INTO `Computer_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`,`Name`) VALUES ('DATATEK','No.- 33, Srinivasa Reddy Layout, N.G.I. Layout, Kalkere Main Road, Ramamurthy Nagar, Bangalore 560016',
'www.datasolution.from.ca','91-80-65303901/25634893','NA','Mr. Karthik Sai C.');
INSERT INTO `Computer_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`,`Name`) VALUES ('PRINTECH SOLUTIONS','158, Varadaraju Indl. Estate, 18 Main, 4Th Block, Jayanagar, Bangalore 560041',
'www.pritechsolutions.net','91-80-26630767/32943574','printech_solution@yahoo.co.in','Mr. Dinakara Shetty');
INSERT INTO `Computer_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`,`Name`) VALUES ('WESTERN DATA FORMS','#C-154, Industrial Estate, Baikampady, Mangalore',
'www.westerndata.com','91-824-2406847, 65 11120','ksis@dataone.in','Mr. Chandra Shekar Rai');
INSERT INTO `Computer_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`,`Name`) VALUES ('SOGO COMPUTERS','D-1/1, Hayes Court, 1/9, Hayes Road (Off Richmond Road), Bangalore 560025',
'www.sogocomputers.com','91-80-22120640/22270891','sogocomp@bgl.vsnl.net.in','Mr. Jaya Muni Rao');
INSERT INTO `Computer_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`,`Name`) VALUES ('LANNER ELECTRONICS INDIA LTD.','#786, Aishwarya, 16Th Main, B.T.M. Layout 2Nd Stage,Bangalore 560076',
'www.lannerinc.com','91-80-26786320/26786320','sales_bangalore@lannerinc.com','Mr. Gaonkar , Mr. Ganesh');




-- Business Sector Table and Values Deatils:
CREATE TABLE `Business_details` (
`Comp_name` varchar(255) NOT NULL,
`Address` varchar(255) NOT NULL,
`website` varchar(255) NOT NULL,
`Phone` varchar(255) NOT NULL,
`Email` varchar(255) NOT NULL,
`Name` varchar(255) NOT NULL
);


INSERT INTO `Business_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`,`Name`) VALUES ('SHEEN ELECTROPLATERS PVT. LTD.','90 (60 Ft Road), 6Th Cross, N.S. Palya Extension,Bannerghatta Road, Bangalore 560076',
'www.sheenindia.com','91-80-26688120/26685638','sheen@airtelbroadband.in, don@sheenindia.com','Mr. Jaya Kumar, Mr. Eypuser , Mr. Y. Vincent');
INSERT INTO `Business_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`,`Name`) VALUES ('DOVETAIL FURNITURE PVT. LTD.','240/B, Bommasandra Industrial Area, Hosur Road, Anekal Taluk, Bangalore 560099',
'www.dovetail.in','91-80-27832430/27835927','NA','Ms. Alka Vernekar, Mr.V.Sai Prasad, Mr. Sundar');
INSERT INTO `Business_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`,`Name`) VALUES ('TRANSPARENT TECHNOLOGIES PVT. LTD.','Software Development Centre, #129-132, Tarihal Ind. Area, Opp. Telephone Exchange, Tarihal, Hubli, Bangalore - 580030',
'www.transtechind.net','91-836-2213021/22','vikram_bagewadi@transtechind.net','Mr. Vikram B. Bagewadi');
INSERT INTO `Business_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`,`Name`) VALUES ('ZENITH SOFTWARE LTD.','Zenith House, 4, Industrial Layout, Koramangala,Bangalore 560095',
'www.zenithsoft.com','91-80-25522861','snats@zenithsoft.com','Mr. Kolar Nagendra Kumar');
INSERT INTO `Business_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`,`Name`) VALUES ('ZEOMEGA INFOTECH PVT. LTD.','#20, 21, Rajalakshmi Plaza, Ii Floor, South End Road,Basavanagudi, Bangalore 560004',
'www.zeomega.com','91-80-26632589/26537795','sathya@zeomega.com, contact@zeomega.com','Mr. Satya Rangaswamy , Mr. Sadanand Roy');
INSERT INTO `Business_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`,`Name`) VALUES ('SSG INDIA','#30, 5 Main Road, Jayamahal Extension, Bangalore 560046',
'www.ssgindia.com','91-80-23330913','sabya@ssgindia.com','Mr. Sabyasachi S. Gupta');
INSERT INTO `Business_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`,`Name`) VALUES ('S.V.S. TEXTILE PROCESSORS','No. 27/1, Gbm & Sons Ind. Estate, Late G.B. Munikrishnappa Road, Ramachandrapura, Jalahalli Post,Bangalore 560003',
'www.svstextileprocessors.com','91-80-23452303/32922622','NA','Mr. Somanna M.');
INSERT INTO `Business_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`,`Name`) VALUES ('COMPUDYNE WINFOSYSTEMS LTD.','Compudyne House, 7Th Mile Stone, Kudalu Gate, Hosur Road, Bangalore 560068',
'www.cwlglobal.com','91-80-25734737','NA','Mr. Neha Jain , Girish Varma, Mr. Muralidharan S Dayai');
INSERT INTO `Business_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`,`Name`) VALUES ('CMC LTD.','11/2, Palace Road, Bangalore 560052',
'www.cmcltd.com','91-80-56940633/22353322','NA','Mr. Ashvin Srinivas , Mr. Raju Mahadik Jagannath Rao');
INSERT INTO `Business_details` (`Comp_name`,`Address`,`website`,`Phone`,`Email`,`Name`) VALUES ('OAK SYSTEMS PVT. LTD.','#31, Kr Layout, Domlur, Bangalore 560071',
'www.oaksys.net','91-80-25354078','lingaraju@oaksys.net','Mr. H.G.Lingaraju');