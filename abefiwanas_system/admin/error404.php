
<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="style.css">
<title>Error404</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!----------------------------------------------------------------------------------->
<link href="https://www-assets.carwow.co.uk/assets/favicon-32x32-b7f2b5807fce80b6dfecd4ef3bde87370863be35.png" rel="icon" sizes="16x16 32x32 48x48" type="image/png">
<link href="https://www-assets.carwow.co.uk/assets/touch-icon-ipad-retina-6b50b6b17760694522c9895a9a120383e2938b6a.png" rel="apple-touch-icon">
<link rel="stylesheet" href="https://www-assets.carwow.co.uk/assets/src/stylesheets/common-a24063fad8bc9d805fddbdd5dfd8bb554e90f6f9.css" media="all">
<link rel="stylesheet" href="https://www-assets.carwow.co.uk/assets/pages/home/index/index-ade9c3802eb18ef9e07dbabb24d276d67628fa8b.css" media="all">

<!----------------------------------------------------------------------------------->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-ios.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<style>
    @import url('https://fonts.googleapis.com/css?family=Nunito+Sans');
:root {
  --blue: #0e0620;
  --white: #fff;
  --green: red;
}
html,
body {
  height: 100%;
}
body {
  display: flex;
  align-items: center;
  justify-content: center;
  font-family:"Nunito Sans";
  color: var(--blue);
  font-size: 1em;
}
button {
  font-family:"Nunito Sans";
}
ul {
  list-style-type: none;
  padding-inline-start: 35px;
}
svg {
  width: 100%;
  visibility: hidden;
}
h1 {
  font-size: 7.5em;
  margin: 15px 0px;
  font-weight:bold;
}
h2 {
  font-weight:bold;
}
.hamburger-menu {
  position: absolute;
  top: 0;
  left: 0;
  padding: 35px;
  z-index: 2;

  & button {
    position: relative;
    width: 30px;
    height: 22px;
    border: none;
    background: none;
    padding: 0;
    cursor: pointer;

    & span {
      position: absolute;
      height: 3px;
      background: #000;
      width: 100%;
      left: 0px;
      top: 0px;
      transition: 0.1s ease-in;
      &:nth-child(2) {
        top: 9px;
      }
      &:nth-child(3) {
        top: 18px;
      }
    }
  }
  & [data-state="open"] {
    & span {
      &:first-child {
        transform: rotate(45deg);
        top: 10px;
      }
      &:nth-child(2) {
        width: 0%;
        opacity:0;
      }
      &:nth-child(3) {
        transform: rotate(-45deg);
        top: 10px;
      }
    }
  }
}
nav {
  position: absolute;
  height: 100%;
  top: 0;
  left: 0;
  background: var(--green);
  color: var(--blue);
  width: 300px;
  z-index: 1;
  padding-top: 80px;
  transform: translateX(-100%);
  transition: 0.24s cubic-bezier(.52,.01,.8,1);
  & li {
    transform: translateX(-5px);
    transition: 0.16s cubic-bezier(0.44, 0.09, 0.46, 0.84);
    opacity: 0;
  }
  & a {
    display: block;
    font-size: 1.75em;
    font-weight: bold;
    text-decoration: none;
    color: inherit;
    transition: 0.24s ease-in-out;
    &:hover {
      text-decoration: none;
      color: var(--white);
    }
  }
  &[data-state="open"] {
    transform: translateX(0%);
    & ul {
      @for $i from 1 through 4 {
        li:nth-child(#{$i}) {
          transition-delay: 0.16s * $i;
          transform: translateX(0px);
          opacity: 1;
        }
      }
    }
  }
}
.btn {
  z-index: 1;
  overflow: hidden;
  background: transparent;
  position: relative;
  padding: 8px 50px;
  border-radius: 30px;
  cursor: pointer;
  font-size: 1em;
  letter-spacing: 2px;
  transition: 0.2s ease;
  font-weight: bold;
  margin: 5px 0px;
  &.green {
    border: 4px solid var(--green);
    color: var(--blue);
    &:before {
      content: "";
      position: absolute;
      left: 0;
      top: 0;
      width: 0%;
      height: 100%;
      background: var(--green);
      z-index: -1;
      transition: 0.2s ease;
    }
    &:hover {
      color: var(--white);
      background: var(--green);
      transition: 0.2s ease;
      &:before {
        width: 100%;
      }
    }
  }
}
@media screen and (max-width:768px) {
  body {
    display:block;
  }
  .container {
    margin-top:70px;
    margin-bottom:70px;
  }
} 
    </style>
<main>
<img class="w3-quarter w3-margin w3-row-padding" style="width: 500px;" src='sources/error.png'><BR><bR><BR><BR><BR><BR><BR><BR>
  <div class="container">
    <div class="row">
    
      <div class="col-md-6 align-self-center">
    
        <h1 class="w3-col">404</h1><BR>
        
            
                
            
        <h2>UH OH! You're lost.</h2>
        <p>The page you are looking for does not exist.
          How you got here is a mystery. But you can click the button below
          to go back to the homepage.
        </p>
        <a href="index.php" class="btn green">HOME</a>
      </div>
    </div>
  </div>
</main>