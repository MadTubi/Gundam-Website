//Removes html elements on "_Grade.php" pages and replaces them and fills in info from database on the same page
function changePage(text){
   //First remove what is on the page.
   let element2 = document.getElementById("Title1");
   element2.remove();

   let element = document.getElementById("EntBox");
   element.remove();

   let pBack = document.getElementsByClassName("CenterP");
   pBack[0].remove();

   //Create html elements and then set the CSS
   let div1 = document.createElement("div");
   div1.setAttribute("id","BigBox");
   document.body.appendChild(div1);
   
   let div2 = document.createElement("div");
   div2.setAttribute("id","BigBox2");
   div1.appendChild(div2);

   //Gundam ID
   let NumberGund = document.createElement("h2");
   NumberGund.innerHTML = "ID# " + (text.GundamID);
   div2.appendChild(NumberGund);
   
   let h2 = document.createElement("h2");
   h2.innerHTML=text.Title;
   div2.appendChild(h2);

   let div3 = document.createElement("div");
   div3.setAttribute("id", "BigBox2Image");
   div2.appendChild(div3);

   let img = document.createElement('img');
   img.setAttribute("src", text.GundamImage);
   img.setAttribute("id", "BBI");
   img.setAttribute("alt", "Image of clicked Gundam");
   div3.appendChild(img);

   let div4 = document.createElement("div");
   div4.setAttribute("id", "BBText");
   div3.appendChild(div4);

   let p1 = document.createElement("p");
   p1.setAttribute("class","BBLarge");
   p1.innerHTML = "Grade: " +  (text.Grade);
   div4.append(p1);

   let p2 = document.createElement("p");
   p2.setAttribute("class","BBLarge");
   p2.innerHTML = "Scale: " +  (text.Scale);
   div4.append(p2);

   let p3 = document.createElement("p");
   p3.setAttribute("class","BBLarge");
   p3.innerHTML = "Discontinued: " +  (text.Discontinued);
   div4.append(p3);

   let p4 = document.createElement("p");
   p4.setAttribute("class","BBLarge");
   p4.innerHTML = "Code: " +  (text.Code);
   div4.append(p4);

   let div5 = document.createElement("div");
   div5.setAttribute("class","rate");
   div3.appendChild(div5);


   let h2_1 = document.createElement("h2");
   h2_1.innerHTML = "Please click a star to rate this gundam:";
   div5.appendChild(h2_1);


   //Poll for quiz//vhanged back to post from get
   let forms = document.createElement("form");
   forms.setAttribute("method", "post");
   forms.setAttribute("action", "poll.php");
   div5.append(forms);

   //Number ID
   let GrabGundamId = document.createElement("input");
   GrabGundamId.setAttribute("type", "text");
   GrabGundamId.setAttribute("id", "GrabGunID");
   GrabGundamId.setAttribute("name", "IdforGundam");
   GrabGundamId.setAttribute("placeholder", "Enter ID number of Gundam");
   forms.appendChild(GrabGundamId);


   let input1 = document.createElement("input");
   input1.setAttribute("type", "radio");
   input1.setAttribute("id", "star5");
   input1.setAttribute("name","rate");
   input1.setAttribute("value", "5");
   forms.appendChild(input1);

   let label1 = document.createElement("label");
   label1.setAttribute("for","star5");
   label1.setAttribute("title", "text");
   label1.innerHTML = "5 stars";
   forms.appendChild(label1);

   let input2 = document.createElement("input");
   input2.setAttribute("type", "radio");
   input2.setAttribute("id", "star4");
   input2.setAttribute("name","rate");
   input2.setAttribute("value", "4");
   forms.appendChild(input2);

   let label2 = document.createElement("label");
   label2.setAttribute("for","star4");
   label2.setAttribute("title", "text");
   label2.innerHTML = "4 stars";
   forms.appendChild(label2);

   let input3 = document.createElement("input");
   input3.setAttribute("type", "radio");
   input3.setAttribute("id", "star3");
   input3.setAttribute("name","rate");
   input3.setAttribute("value", "3");
   forms.appendChild(input3);

   let label3 = document.createElement("label");
   label3.setAttribute("for","star3");
   label3.setAttribute("title", "text");
   label3.innerHTML = "3 stars";
   forms.appendChild(label3);

   let input4 = document.createElement("input");
   input4.setAttribute("type", "radio");
   input4.setAttribute("id", "star2");
   input4.setAttribute("name","rate");
   input4.setAttribute("value", "2");
   forms.appendChild(input4);

   let label4 = document.createElement("label");
   label4.setAttribute("for","star2");
   label4.setAttribute("title", "text");
   label4.innerHTML = "2 stars";
   forms.appendChild(label4);

   let input5 = document.createElement("input");
   input5.setAttribute("type", "radio");
   input5.setAttribute("id", "star1");
   input5.setAttribute("name","rate");
   input5.setAttribute("value", "1");
   forms.appendChild(input5);

   let label5 = document.createElement("label");
   label5.setAttribute("for","star1");
   label5.setAttribute("title", "text");
   label5.innerHTML = "1 stars";
   forms.appendChild(label5);

   //Submit button for form
   let button1 = document.createElement("button");
   button1.setAttribute("type","submit");
   button1.setAttribute("name","RateGund");
   button1.innerText = "Rate";
   forms.appendChild(button1);

   let div6 = document.createElement("div");
   div6.setAttribute("id","BBDescription");
   div2.appendChild(div6);

   let p5 = document.createElement("p");
   p5.setAttribute("class","BBLarge2");
   p5.innerText = text.GundamDescription;
   div6.appendChild(p5);

   let p6 = document.createElement("p");
   p6.setAttribute("class", "CenterP");
   document.body.appendChild(p6);

   let aLink = document.createElement("a");
   aLink.setAttribute("class", "WhiteLinks");
   aLink.setAttribute("href", "Gundam.php");
   aLink.innerText = "Back to Gundam Page";
   p6.appendChild(aLink);

}


//This is to call the php page
//It uses JQuery and ajax to send information to the psot.php
//The post.php , based on success retuns the information back to this function which
//calls another method called changePage()
function changeDom(info){

    $.ajax({
        type: "POST", 
        url: "post.php", 
        data: {text: info},
        success: function(data1){
            var result = JSON.parse(data1);
            changePage(result);

        }
    });

}


//This is for the all the "_Grade.php" pages. It makes the html li tags clickable
//It then calls the function changeDom()
let x = document.getElementsByClassName("Entries");
for(let i = 0; i <x.length; i++){
    x[i].addEventListener("click", function(){
        let title = x[i].textContent;
        changeDom(title);
    }, false);

}



