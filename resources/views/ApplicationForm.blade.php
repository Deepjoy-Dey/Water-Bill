@extends('layouts.app')

@section('content')

<head>
<link rel="stylesheet" href="/css/application.css"/>
</head>


<div class="application_form">
    <div class="nav_form_af">
        <center><h2 class="navbar_af">Application Form</h2></center>
        
    </div>

    <div class="Applicationform">
        <form action="/Homepage" method="post">
        @csrf
            <table class="table table-striped">

                
                    <div id="personalDetail" class="block">
                    <tr>
                    <th class="address">Personal Detail :--</th>
                    </tr>
                    <tr>
                    <th>Bill Date *: </th>
                    <td><input type="date" name="Bill_Date" placeholder="Bill Date" required></td>
                    </tr>
                    <tr>
                    <th>Bill No./Cons umer Registration No. *: </th>
                    <td><input type="text" name="Bill_No_Consumer_Registration_No" required></td>
                    </tr>
                    <tr>
                    <th>Consumer Name*: </th>
                    <td><input type="text" name="Consumer_Name"placeholder="Consumer Name" required></td>
                    </tr>
                    <th> Email : </th>
                    <td><input type="email" name="Email" placeholder="abc@mail.com"></td>
                    <tr>
                    </tr>
                    <th>Contact No* : </th><td><input type="number" name="Contact_No" placeholder="" required></td>
                    </tr>
                </div>
                <div id="address" class="block">
                <th>
                <p class="address"> Address :--</p>
                    <ul class="address_list">
                       <tr>
                            <th>House no.* : </th><td><input type="text"name="Address_Hno" placeholder="H/no." required></td>
                       <tr>
                            <th>Sub locality 1* : </th><td><input type="text"name="Address_Sub_locality1" placeholder="Sub locality 1" required></td>
                       <tr>
                            <th>Sub locality 2 : </th><td><input type="text"name="Address_Sub_locality2" placeholder="Sub locality 2" ></td>
                       <tr>
                            <th>Location* : </th><td><input type="text"name="Address_Location" placeholder="Location" required></td>
                       <tr>
                            <th>Sub District* :</th>  
                            <td>
                                <select name="Sub_District" required>
                                <option value="0" selected diabled >Select an Option</option>
                                <option value="Aibawk">Aibawk</option>  
                                <option value="Tlangnuam">Tlangnuam</option>  
                                <option value="Thingsulthliah">Thingsulthliah</option>  
                                <option value="Phullen">Phullen</option>  
                                <option value="Darlawn">Darlawn</option>

                                <option value="Lunglei">Lunglei </option>  
                                <option value="Lungsen">Lungsen</option>
                                <option value="Hnahthial">Hnahthial</option>  
                                <option value="West Bunghmun">West Bunghmun</option>
                                
                                <option value="Khawzawl">Khawzawl</option>  
                                <option value="Champhai">Champhai</option>  
                                <option value="Khawbung">Khawbung </option>  
                                <option value="Ngopa">Ngopa </option> 
                                <option value="East Lungdar">East Lungdar</option> 

                                <option value="Chawngte">Chawngte</option>  
                                <option value="Lawngtlai">Lawngtlai</option>  
                                <option value="S Bungtlang">S Bungtlang</option>  
                                <option value="Sangau">Sangau </option> 

                                <option value="Zawlnuam">Zawlnuam </option> 
                                <option value="West Phaileng">West Phaileng </option> 
                                <option value="Reiek">Reiek </option> 

                                <option value="Bilkhawthlir">Bilkhawthlir </option> 
                                <option value="N Thingdawl">N Thingdawl </option> 
                                <option value="Tlangnuam">Tlangnuam </option> 

                                <option value="Serchhip">Serchhip </option> 
                                <option value="East Lungdar">East Lungdar </option> 
                                <option value="East Lungdar (Pt)">East Lungdar (Pt) </option> 
                                <option value="Thingsulthliah">Thingsulthliah </option> 
                                
                                <option value="Saiha">Saiha </option> 
                                <option value="Tuipang">Tuipang </option> 
                                <option value="Others">Others </option> 

                                </select>
                             </td>
                             </tr>
                       <tr>
                            <th>District* :</th> 
                         <td> <select name="District" required> 
                                <option value="0" selected diabled >Select an Option</option>
                                <option value="Aizawl">Aizawl</option>  
                                <option value="Kolasib">Kolasib</option>  
                                <option value="Champhai">Champhai</option>  
                                <option value="Lawngtlai">Lawngtlai</option>  
                                <option value="Mamit">Mamit</option>  
                                <option value="Saiha">Saiha </option>  
                                <option value="Serchhip">Serchhip</option>
                                <option value="Lunglei">Lunglei</option>
                                <option value="Hnahthial">Hnahthial</option>
                                <option value="Khawazawl">Khawazawl</option>
                                <option value="Saitual">Saitual</option>
                                <option value="Others">Others </option>
                            </select> 
                            </td>
                        </tr>
                       <tr>
                            <th>State* : </th>
                            <td> <select name="State" required>
                                <option value="0" selected diabled >Select an Option</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                <option value="Daman and Diu">Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Puducherry">Puducherry</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West Bengal">West Bengal</option>
                                <option value="Others">Others </option>
                            </select>
                        </td>
                        
                        </tr>
                       <tr>
                            <th>Pin code* : </th>
                            <td><input type="text"name="Pin_Code" placeholder="Pin code" required></td>
                        </tr>
                       <tr>
                            <th>Country* : </th>
                            <td><select name="Country" required>
                                <option value="0" selected diabled >Select an Option</option>
                                <option value="Afganistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bonaire">Bonaire</option>
                                <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                <option value="Brunei">Brunei</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Canary Islands">Canary Islands</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Channel Islands">Channel Islands</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos Island">Cocos Island</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote DIvoire">Cote DIvoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Curaco">Curacao</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="East Timor">East Timor</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands">Falkland Islands</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Ter">French Southern Ter</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Great Britain">Great Britain</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Hawaii">Hawaii</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="India">India</option>
                                <option value="Iran">Iran</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea North">Korea North</option>
                                <option value="Korea Sout">Korea South</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Laos">Laos</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libya">Libya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macau">Macau</option>
                                <option value="Macedonia">Macedonia</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Midway Islands">Midway Islands</option>
                                <option value="Moldova">Moldova</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Nambia">Nambia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherland Antilles">Netherland Antilles</option>
                                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                <option value="Nevis">Nevis</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau Island">Palau Island</option>
                                <option value="Palestine">Palestine</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Phillipines">Philippines</option>
                                <option value="Pitcairn Island">Pitcairn Island</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Republic of Montenegro">Republic of Montenegro</option>
                                <option value="Republic of Serbia">Republic of Serbia</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russia">Russia</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="St Barthelemy">St Barthelemy</option>
                                <option value="St Eustatius">St Eustatius</option>
                                <option value="St Helena">St Helena</option>
                                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                <option value="St Lucia">St Lucia</option>
                                <option value="St Maarten">St Maarten</option>
                                <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                <option value="Saipan">Saipan</option>
                                <option value="Samoa">Samoa</option>
                                <option value="Samoa American">Samoa American</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syria">Syria</option>
                                <option value="Tahiti">Tahiti</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Erimates">United Arab Emirates</option>
                                <option value="United States of America">United States of America</option>
                                <option value="Uraguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Vatican City State">Vatican City State</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                <option value="Wake Island">Wake Island</option>
                                <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zaire">Zaire</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                                <option value="Others">Others </option>
                            </select>
                        </td>
                        </tr>
                        </ul> 
                       <tr>
                            <th>CSC No./E-Services centre* : </th>
                            <td><select name="CSC_No_E-Services_centre" required> 
                                <option value="0" selected diabled >Select an Option</option>
                                <option value="0001">0001</option>  
                                <option value="0002">0002</option>  
                                <option value="0003">0003</option>  
                                <option value="0004">0004</option>  
                                <option value="0005">0005</option>  
                                <option value="0006">0006 </option>  
                                <option value="0007">0007</option>
                                <option value="0008">0008</option>
                                <option value="0009">0009</option>
                                <option value="0010">0010</option>
                                <option value="0011">0011</option>
                                <option value="0012">0012</option>
                                <option value="0013">0013</option>
                                <option value="0014">0014</option>
                                <option value="0015">0015</option>
                                <option value="0016">0016</option>
                                <option value="0017">0017</option>
                                <option value="0018">0018</option>
                                <option value="0019">0019</option>
                                <option value="0020">0020</option>
                                <option value="0021">0021</option>
                                <option value="0022">0022</option>
                                <option value="0023">0023</option>
                                <option value="0024">0024</option>
                                <option value="0025">0025</option>
                                <option value="0026">0026</option>
                                <option value="0027">0027</option>
                                <option value="0028">0028</option>
                                <option value="0029">0029</option>
                            </select> 
                        </td>
                        </tr>
                       <tr>
                            <th>Zone Code* :</th> 
                            <td><select name="Zone_Code" required> 
                                <option value="0" selected diabled >Select an Option</option>
                                <option value="0001">0001</option>  
                                <option value="0002">0002</option>  
                                <option value="0003">0003</option>  
                                <option value="0004">0004</option>  
                                <option value="0005">0005</option>  
                                <option value="0006">0006 </option>  
                                <option value="0007">0007</option>
                                <option value="0008">0008</option>
                                <option value="0009">0009</option>
                                <option value="0010">0010</option>
                                <option value="0011">0011</option>
                                <option value="0012">0012</option>
                                <option value="0013">0013</option>
                                <option value="0014">0014</option>
                                <option value="0015">0015</option>
                                <option value="0016">0016</option>
                                <option value="0017">0017</option>
                                <option value="0018">0018</option>
                                <option value="0019">0019</option>
                                <option value="0020">0020</option>
                                <option value="0021">0021</option>
                                <option value="0022">0022</option>
                                <option value="0023">0023</option>
                                <option value="0024">0024</option>
                                <option value="0025">0025</option>
                                <option value="0026">0026</option>
                                <option value="0027">0027</option>
                                <option value="0028">0028</option>
                                <option value="0029">0029</option>
                            </select> 
                        </td>
                        </tr>
                       <tr>
                            <th>Meter Reader No.* : </th>
                            <td><input type="text"name="Meter_Reader_No" placeholder="M/R_N0" required></td>
                        </tr>
                       <tr>
                            <th>Area Code* : </th>
                            <td><select name="Area_Code" required> 
                                <option value="0" selected diabled >Select an Option</option>
                                <option value="1001">1001</option>  
                                <option value="1002">1002</option>  
                                <option value="1003">1003</option>  
                                <option value="1004">1004</option>  
                                <option value="1005">1005</option>  
                                <option value="1006">1006 </option>  
                                <option value="1007">1007</option>
                                <option value="1008">1008</option>
                                <option value="1009">1009</option>
                                <option value="1010">1010</option>
                                <option value="1011">1011</option>
                                <option value="1012">1012</option>
                                <option value="1013">1013</option>
                                <option value="1014">1014</option>
                                <option value="1015">1015</option>
                                <option value="1016">1016</option>
                                <option value="1017">1017</option>
                                <option value="1018">1018</option>
                                <option value="1019">1019</option>
                                <option value="1020">1020</option>
                                <option value="1021">1021</option>
                                <option value="1022">1022</option>
                                <option value="1023">1023</option>
                                <option value="1024">1024</option>
                                <option value="1025">1025</option>
                                <option value="1026">1026</option>
                                <option value="1027">1027</option>
                                <option value="1028">1028</option>
                                <option value="1029">1029</option>
                            </select>
                        </td>
                        </tr>
                       <tr>
                            <th>Water Connection No.* : </th>
                            <td><input type="text"name="Water_Connection_No" placeholder="w/C_N0" required></td>
                        </tr>
                       <tr>
                            <th>Total Amount: </th>
                            <td><input type="text"name="Total_Amount" placeholder="Total Amount" ></td>
                        </tr>
                       <tr>
                            <th>Remarks* :</th>
                            <td> <textarea name="Remark" id="Remark" cols="30" rows="10"  ></textarea></td>
                        </tr>
            
                </td>
                </di

                

        
            </th>
            <td><input type="submit" value="Save" class="save_btn save">

</table>
    </form>
</div>
@endsection