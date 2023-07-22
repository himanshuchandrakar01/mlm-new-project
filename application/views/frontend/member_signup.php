<?php include('layout/header.php'); ?>
<style>
  .card{
    border: 1px solid black;
    padding: 30px;
    border-radius: 7px;
  }

  label{
    float: left;
    font-size: 20px;
  }
</style>
  <?php
if (isset($_REQUEST['success'])) {
  ?>
<script type="text/javascript">
  alert("inserted successfully");
</script>



  <?php
}


  ?>
<br>
<br>
<div class="container">
  <form action="membersignup-store" method="post" enctype="multipart/form-data"> 
  <div class="card">
    <center><h2><u>Vikas Samiti Registration form</u></h2></center>
    <br>
  <div class="row">
    <div class="col-sm-4 col-md-4">
      <label>Applying for</label>
      <select class="form-control" name="apply_for" required>
          <option>Select Option</option>
          <option value="shagun yojna">Shagun Yojna</option>
          <option value="social activity">Social Activity</option>   
      </select>
    </div>
    <div class="col-sm-4 col-md-4">
      <label>Assistant ID</label>
       <?php if(isset($_REQUEST['amobile'])){
        ?><input type="text" name="" class="form-control" value="<?=$_REQUEST['amobile']?>" readonly>
      <?php }else{ ?>
        <input type="text" name="" class="form-control">
     <?php } ?>
      <?php if(isset($_REQUEST['aid'])){
        ?><input type="hidden" name="assistant_id" class="form-control" value="<?=$_REQUEST['aid']?>" readonly>
      <?php }else{ ?>
        <input type="hidden" name="assistant_id" class="form-control">
     <?php } ?>
      
    </div>
    <div class="col-sm-4 col-md-4">
      <label>Assistant Name</label>
      <?php if(isset($_REQUEST['aname'])){
        ?><input type="text" name="assistant_name" class="form-control" value="<?=$_REQUEST['aname']?>" readonly>
      <?php }else{ ?>
      <input type="text" name="assistant_name" class="form-control">
       <?php } ?>
    </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-4 col-md-4">
          <label>Name</label>
          <input type="text" name="name" class="form-control" required>
        </div>
         <div class="col-sm-4 col-md-4">
          <label>Gender</label>
          <select class="form-control" name="gender" required>
            <option>Select gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
        </div>
        <div class="col-sm-4 col-md-4">
          <label>Rashan card</label>
          <select class="form-control" name="rashan_card" required>
            <option>Select category</option>
            <option value="BPL">BPL</option>
            <option value="APL">APL</option>
            <option value="None">None</option>
          </select>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-6 col-md-6">
          <label>Date Of Birth</label>
          <input type="date" name="dob" class="form-control" required>
        </div>
         <div class="col-sm-6 col-md-6">
          <label>Father/Husband Name</label>
          <input type="text" name="father_husbandname" class="form-control" required>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-6 col-md-6">
          <label>Profession</label>
          <select class="form-control" name="profession" required>
                  <option value="">Select Profession</option>
                  <option value="Government Job">Government Job</option>
                  <option value="Private Job">Private Job</option>
                  <option value="Police">Police</option>
                  <option value="Army">Army</option>
                  <option value="Farmer">Farmer</option>
                  <option value="Self Business">Self Business</option>
                  <option value="Student">Student</option>
                  <option value="House Wife">House Wife</option>
                </select>
        </div>
         <div class="col-sm-6 col-md-6">
          <label>Blood Group</label>
          <select class="form-control" name="blood_group">
                  <option value="">Select Blood Group</option>
                  <option value="A+">A+</option>
                  <option value="A-">A-</option>
                  <option value="B+">B+</option>
                  <option value="B-">B-</option>
                  <option value="O+">O+</option>
                  <option value="O-">O-</option>
                  <option value="AB+">AB+</option>
                  <option value="AB-">AB-</option>
          </select>
        </div>
    </div>
<br>
    <div class="row">
      <div class="col-sm-6 col-md-6">
        <label>State</label>
        <input type="text" class="form-control" name="state">
      </div>
      <div class="col-sm-6 col-md-6">
        <label>District</label>
        <input type="text" class="form-control" name="country">
      </div>
    </div>
    
     
    
<br>
    <div class="row">
      <div class="col-sm-6 col-md-6">
        <label>Mobile No.</label>
        <input type="number" name="mobileno" maxlength="10" class="form-control" required>
      </div>
      <div class="col-sm-6 col-md-6">
        <label>Aadhar No.</label>
        <input type="number" name="aadharno" maxlength="12" class="form-control" required>
      </div>
    </div><div class="row">
      <div class="col-sm-12 col-md-12">
        <label>Address</label><br>
        <textarea class="form-control" name="address" required></textarea>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-sm-4 col-md-4">
        <label>Pincode</label>
        <input type="number" maxlength="6" name="pincode" class="form-control" required>
      </div>
      <div class="col-sm-4 col-md-4">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
      </div>
      <div class="col-sm-4 col-md-4">
        <label>Profile Picture</label>
        <input type="file" name="profilepic" class="form-control" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-sm-4 col-md-4">
        <label>Select your id</label>
        <select class="form-control" name="idcard" required>
              <option value="">Select Your ID</option>
              <option value="Aadhar Card">Aadhar Card</option>
              <option value="PAN Card">PAN Card</option>
              <option value="Voter Card">Voter Card</option>
              <option value="Driving Licence">Driving Licence</option>
              <option value="Rashan Card">Rashan Card</option>
              <option value="Class 10th Marksheet">Class 10th Marksheet</option>
            </select>
      </div>
      <div class="col-sm-4 col-md-4">
        <label>Front Card Image</label>
        <input type="file" name="frontcard" class="form-control">
      </div>
      <div class="col-sm-4 col-md-4">
        <label>Back Card Image</label>
        <input type="file" name="backcard" class="form-control">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-sm-6 col-md-6">
        <label>Other document</label>
        <input type="file" name="otherdoc" class="form-control">
      </div>
    </div>
     <br>
    <center><button  type="submit" class="btn btn-success form-control">REGISTER</button></center>
</div>
</form>
</div>
<br>
<br>
<?php include('layout/footer.php'); ?>
<!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script> -->

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> -->


<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
<script>

 var countries = Object();

countries['AndraPradesh'] = 'Anantapur|Chittoor|East Godavari|Guntur|Kadapa|Krishna|Kurnool|Prakasam|Nellore|Srikakulam|Visakhapatnam|Vizianagaram|West Godavari';

countries['ArunachalPradesh'] = 'Anjaw|Changlang|Dibang Valley|East Kameng|East Siang|Kra Daadi|Kurung Kumey|Lohit|Longding|Lower Dibang Valley|Lower Subansiri|Namsai|Papum Pare|Siang|Tawang|Tirap|Upper Siang|Upper Subansiri|West Kameng|West Siang|Itanagar';

countries ['Assam'] = 'Baksa|Barpeta|Biswanath|Bongaigaon|Cachar|Charaideo|Chirang|Darrang|Dhemaji|Dhubri|Dibrugarh|Goalpara|Golaghat|Hailakandi|Hojai|Jorhat|Kamrup Metropolitan|Kamrup (Rural)|Karbi Anglong|Karimganj|Kokrajhar|Lakhimpur|Majuli|Morigaon|Nagaon|Nalbari|Dima Hasao|Sivasagar|Sonitpur|South Salmara Mankachar|Tinsukia|Udalguri|West Karbi Anglo';

countries['Bihar'] = 'Araria|Arwal|Aurangabad|Banka|Begusarai|Bhagalpur|Bhojpur|Buxar|Darbhanga|East Champaran|Gaya|Gopalganj|Jamui|Jehanabad|Kaimur|Katihar|Khagaria|Kishanganj|Lakhisarai|Madhepura|Madhubani|Munger|Muzaffarpur|Nalanda|Nawada|Patna|Purnia|Rohtas|Saharsa|Samastipur|Saran|Sheikhpura|Sheohar|Sitamarhi|Siwan|Supaul|Vaishali|West Champaran';
countries['Chhattisgarh'] = 'Balod|Baloda Bazar|Balrampur|Bastar|Bemetara|Bijapur|Bilaspur|Dantewada|Dhamtari|Durg|Gariaband|Janjgir Champa|Jashpur|Kabirdham|Kanker|Kondagaon|Korba|Koriya|Mahasamund|Mungeli|Narayanpur|Raigarh|Raipur|Rajnandgaon|Sukma|Surajpur|Surguja';
countries ['Goa'] = 'North Goa|South Goa';
countries ['Gujarat'] = 'Ahmedabad|Amreli|Anand|Aravalli|Banaskantha|Bharuch|Bhavnagar|Botad|Chhota Udaipur|Dahod|Dang|Devbhoomi Dwarka|Gandhinagar|Gir Somnath|Jamnagar|Junagadh|Kheda|Kutch|Mahisagar|Mehsana|Morbi|Narmada|Navsari|Panchmahal|Patan|Porbandar|Rajkot|Sabarkantha|Surat|Surendranagar|Tapi|Vadodara|Valsad';
countries['Haryana'] = 'Ambala|Bhiwani|Charkhi Dadri|Faridabad|Fatehabad|Gurugram|Hisar|Jhajjar|Jind|Kaithal|Karnal|Kurukshetra|Mahendragarh|Mewat|Palwal|Panchkula|Panipat|Rewari|Rohtak|Sirsa|Sonipat|Yamunanagar';
countries ['HimanchalPradesh'] = 'Bilaspur|Chamba|Hamirpur|Kangra|Kinnaur|Kullu|Lahaul Spiti|Mandi|Shimla|Sirmaur|Solan|Una';
countries ['JammuKashmir'] = 'Anantnag|Bandipora|Baramulla|Budgam|Doda|Ganderbal|Jammu|Kargil|Kathua|Kishtwar|Kulgam|Kupwara|Leh|Poonch|Pulwama|Rajouri|Ramban|Reasi|Samba|Shopian|Srinagar|Udhampur';
countries ['Jharkhand'] = 'Bokaro|Chatra|Deoghar|Dhanbad|Dumka|East Singhbhum|Garhwa|Giridih|Godda|Gumla|Hazaribagh|Jamtara|Khunti|Koderma|Latehar|Lohardaga|Pakur|Palamu|Ramgarh|Ranchi|Sahebganj|Seraikela Kharsawan|Simdega|West Singhbhum';
countries ['Karnataka'] = 'Bagalkot|Bangalore Rural|Bangalore Urban|Belgaum|Bellary|Bidar|Vijayapura|Chamarajanagar|Chikkaballapur|Chikkamagaluru|Chitradurga|Dakshina Kannada|Davanagere|Dharwad|Gadag|Gulbarga|Hassan|Haveri|Kodagu|Kolar|Koppal|Mandya|Mysore|Raichur|Ramanagara|Shimoga|Tumkur|Udupi|Uttara Kannada|Yadgir';
countries ['Kerala'] = 'Alappuzha|Ernakulam|Idukki|Kannur|Kasaragod|Kollam|Kottayam|Kozhikode|Malappuram|Palakkad|Pathanamthitta|Thiruvananthapuram|Thrissur|Wayanad';
countries ['MadhyaPradesh'] = 'Agar Malwa|Alirajpur|Anuppur|Ashoknagar|Balaghat|Barwani|Betul|Bhind|Bhopal|Burhanpur|Chhatarpur|Chhindwara|Damoh|Datia|Dewas|Dhar|Dindori|Guna|Gwalior|Harda|Hoshangabad|Indore|Jabalpur|Jhabua|Katni|Khandwa|Khargone|Mandla|Mandsaur|Morena|Narsinghpur|Neemuch|Panna|Raisen|Rajgarh|Ratlam|Rewa|Sagar|Satna|Sehore|Seoni|Shahdol|Shajapur|Sheopur|Shivpuri|Sidhi|Singrauli|Tikamgarh|Ujjain|Umaria|Vidisha';
countries ['Maharashtra'] = 'Ahmednagar|Akola|Amravati|Aurangabad|Beed|Bhandara|Buldhana|Chandrapur|Dhule|Gadchiroli|Gondia|Hingoli|Jalgaon|Jalna|Kolhapur|Latur|Mumbai City|Mumbai Suburban|Nagpur|Nanded|Nandurbar|Nashik|Osmanabad|Palghar|Parbhani|Pune|Raigad|Ratnagiri|Sangli|Satara|Sindhudurg|Solapur|Thane|Wardha|Washim|Yavatmal';
countries ['Manipur'] = 'Bishnupur|Chandel|Churachandpur|Imphal East|Imphal West|Jiribam|Kakching|Kamjong|Kangpokpi|Noney|Pherzawl|Senapati|Tamenglong|Tengnoupal|Thoubal|Ukhrul';
countries ['Meghalaya'] = 'East Garo Hills|East Jaintia Hills|East Khasi Hills|North Garo Hills|Ri Bhoi|South Garo Hills|South West Garo Hills|South West Khasi Hills|West Garo Hills|West Jaintia Hills|West Khasi Hills';
countries[ 'Mizoram'] = 'Aizawl|Champhai|Kolasib|Lawngtlai|Lunglei|Mamit|Saiha|Serchhip|Aizawl|Champhai|Kolasib|Lawngtlai|Lunglei|Mamit|Saiha|Serchhip';
countries ['Nagaland'] = 'Dimapur|Kiphire|Kohima|Longleng|Mokokchung|Mon|Peren|Phek|Tuensang|Wokha|Zunheboto';
countries ['Odisha'] = 'Angul|Balangir|Balasore|Bargarh|Bhadrak|Boudh|Cuttack|Debagarh|Dhenkanal|Gajapati|Ganjam|Jagatsinghpur|Jajpur|Jharsuguda|Kalahandi|Kandhamal|Kendrapara|Kendujhar|Khordha|Koraput|Malkangiri|Mayurbhanj|Nabarangpur|Nayagarh|Nuapada|Puri|Rayagada|Sambalpur|Subarnapur|Sundergarh';
countries ['Punjab'] = 'Amritsar|Barnala|Bathinda|Faridkot|Fatehgarh Sahib|Fazilka|Firozpur|Gurdaspur|Hoshiarpur|Jalandhar|Kapurthala|Ludhiana|Mansa|Moga|Mohali|Muktsar|Pathankot|Patiala|Rupnagar|Sangrur|Shaheed Bhagat Singh Nagar|Tarn Taran';
countries ['Rajasthan'] = 'Ajmer|Alwar|Banswara|Baran|Barmer|Bharatpur|Bhilwara|Bikaner|Bundi|Chittorgarh|Churu|Dausa|Dholpur|Dungarpur|Ganganagar|Hanumangarh|Jaipur|Jaisalmer|Jalore|Jhalawar|Jhunjhunu|Jodhpur|Karauli|Kota|Nagaur|Pali|Pratapgarh|Rajsamand|Sawai Madhopur|Sikar|Sirohi|Tonk|Udaipur';
countries ['Sikkim'] = 'East Sikkim|North Sikkim|South Sikkim|West Sikkim';
countries ['TamilNadu'] = 'Ariyalur|Chennai|Coimbatore|Cuddalore|Dharmapuri|Dindigul|Erode|Kanchipuram|Kanyakumari|Karur|Krishnagiri|Madurai|Nagapattinam|Namakkal|Nilgiris|Perambalur|Pudukkottai|Ramanathapuram|Salem|Sivaganga|Thanjavur|Theni|Thoothukudi|Tiruchirappalli|Tirunelveli|Tiruppur|Tiruvallur|Tiruvannamalai|Tiruvarur|Vellore|Viluppuram|Virudhunagar';
countries ['Telangana'] = 'Adilabad|Bhadradri Kothagudem|Hyderabad|Jagtial|Jangaon|Jayashankar|Jogulamba|Kamareddy|Karimnagar|Khammam|Komaram Bheem|Mahabubabad|Mahbubnagar|Mancherial|Medak|Medchal|Nagarkurnool|Nalgonda|Nirmal|Nizamabad|Peddapalli|Rajanna Sircilla|Ranga Reddy|Sangareddy|Siddipet|Suryapet|Vikarabad|Wanaparthy|Warangal Rural|Warangal Urban|Yadadri Bhuvanagiri';
countries ['Tripura'] = 'Dhalai|Gomati|Khowai|North Tripura|Sepahijala|South Tripura|Unakoti|West Tripura';
countries ['UttarPradesh'] = 'Agra|Aligarh|Allahabad|Ambedkar Nagar|Amethi|Amroha|Auraiya|Azamgarh|Baghpat|Bahraich|Ballia|Balrampur|Banda|Barabanki|Bareilly|Basti|Bhadohi|Bijnor|Budaun|Bulandshahr|Chandauli|Chitrakoot|Deoria|Etah|Etawah|Faizabad|Farrukhabad|Fatehpur|Firozabad|Gautam Buddha Nagar|Ghaziabad|Ghazipur|Gonda|Gorakhpur|Hamirpur|Hapur|Hardoi|Hathras|Jalaun|Jaunpur|Jhansi|Kannauj|Kanpur Dehat|Kanpur Nagar|Kasganj|Kaushambi|Kheri|Kushinagar|Lalitpur|Lucknow|Maharajganj|Mahoba|Mainpuri|Mathura|Mau|Meerut|Mirzapur|Moradabad|Muzaffarnagar|Pilibhit|Pratapgarh|Raebareli|Rampur|Saharanpur|Sambhal|Sant Kabir Nagar|Shahjahanpur|Shamli|Shravasti|Siddharthnagar|Sitapur|Sonbhadra|Sultanpur|Unnao|Varanasi';
countries ['Uttarakhand']  = 'Almora|Bageshwar|Chamoli|Champawat|Dehradun|Haridwar|Nainital|Pauri|Pithoragarh|Rudraprayag|Tehri|Udham Singh Nagar|Uttarkashi';
countries ['WestBengal'] = 'Alipurduar|Bankura|Birbhum|Cooch Behar|Dakshin Dinajpur|Darjeeling|Hooghly|Howrah|Jalpaiguri|Jhargram|Kalimpong|Kolkata|Malda|Murshidabad|Nadia|North 24 Parganas|Paschim Bardhaman|Paschim Medinipur|Purba Bardhaman|Purba Medinipur|Purulia|South 24 Parganas|Uttar Dinajpur';
countries ['AndamanNicobar'] = 'Nicobar|North Middle Andaman|South Andaman';
countries ['Chandigarh'] = 'Chandigarh';
countries ['DadraHaveli'] = 'Dadra Nagar Haveli';
countries ['DamanDiu'] = 'Daman|Diu';
countries ['Delhi'] = 'Central Delhi|East Delhi|New Delhi|North Delhi|North East Delhi|North West Delhi|Shahdara|South Delhi|South East Delhi|South West Delhi|West Delhi';
countries ['Lakshadweep'] = 'Lakshadweep';
countries ['Puducherry'] = 'Karaikal|Mahe|Puducherry|Yanam';



html = "";
for (region in countries)
  html += '<option value="' + region + '">' + region + '</option>';

document.getElementById("region").innerHTML = document.getElementById("region").innerHTML + html;

function set_country(oRegionSel, oCountrySel, oCity_StateSel) {
  var countryArr;
  oCountrySel.length = 0;
  oCity_StateSel.length = 0;
  var region = oRegionSel.options[oRegionSel.selectedIndex].text;
  if (countries[region]) {
    oCountrySel.disabled = false;
    oCity_StateSel.disabled = true;
    oCountrySel.options[0] = new Option('SELECT DISTRICT', '');
    countryArr = countries[region].split('|');
    for (var i = 0; i < countryArr.length; i++)
      oCountrySel.options[i + 1] = new Option(countryArr[i], countryArr[i]);
    document.getElementById('txtregion').innerHTML = region;
    document.getElementById('txtplacename').innerHTML = '';
  } else oCountrySel.disabled = true;
}

function set_city_state(oCountrySel, oCity_StateSel) {
  var city_stateArr;
  oCity_StateSel.length = 0;
  var country = oCountrySel.options[oCountrySel.selectedIndex].text;
  if (city_states[country]) {
    oCity_StateSel.disabled = false;
    oCity_StateSel.options[0] = new Option('SELECT NEAREST DIVISION', '');
    city_stateArr = city_states[country].split('|');
    for (var i = 0; i < city_stateArr.length; i++)
      oCity_StateSel.options[i + 1] = new Option(city_stateArr[i], city_stateArr[i]);
 
  } else oCity_StateSel.disabled = true;
}

function print_city_state(oCountrySel, oCity_StateSel) {
  var country = oCountrySel.options[oCountrySel.selectedIndex].text;
  var city_state = oCity_StateSel.options[oCity_StateSel.selectedIndex].text;

}


</script>