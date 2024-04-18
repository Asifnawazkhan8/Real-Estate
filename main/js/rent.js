// const { src } = require("gulp");
//First Column data
const data = [
    {
        
        img : "../assets/images/property/1.webp",
        name : "Royal",
        city : "Down town",
        dim : "Appartment",
        bed : "1",
        bath : "1",
        sqrft : "640",
        price : "650000",
        owner:"ASif",
        live: "Dubai",
      
    },
    {
        
        img : "../assets/images/property/1.webp",
        name : "Royal",
        city : "Down town",
        dim : "Appartment",
        bed : "1",
        bath : "1",
        sqrft : "640",
        price : "650000",
        owner:"ASif",
        live: "Dubai",
      
    },
    {
        
        img : "../assets/images/property/1.webp",
        name : "Royal",
        city : "Down town",
        dim : "Appartment",
        bed : "1",
        bath : "1",
        sqrft : "640",
        price : "650000",
        owner:"ASif",
        live: "Dubai",
      
    },
    {
        
        img : "../assets/images/property/1.webp",
        name : "Royal",
        city : "Down town",
        dim : "Appartment",
        bed : "1",
        bath : "1",
        sqrft : "640",
        price : "650000",
        owner:"ASif",
        live: "Dubai",
      
    },
    {
        
        img : "../assets/images/property/1.webp",
        name : "Royal",
        city : "Down town",
        dim : "Appartment",
        bed : "1",
        bath : "1",
        sqrft : "640",
        price : "650000",
        owner:"ASif",
        live: "Dubai",
      
    },
    {
        
        img : "../assets/images/property/1.webp",
        name : "Royal",
        city : "Down town",
        dim : "Appartment",
        bed : "1",
        bath : "1",
        sqrft : "640",
        price : "650000",
        owner:"ASif",
        live: "Dubai",
      
    }
  
  
  
    
  ];
  data.forEach((element , i) => {
    
  
  const main = document.querySelector("#data");
  console.log(main);
  const card = document.createElement("div");
  card.classList = card;
  const detail =
  `
  <img style="width: auto; height: 200px; margin-top:20px;margin-bottom:20px; border: 1px solid #CFB53B; border-radius:5px;" src="${data[i].img}"/>
  <div style="width:auto;" class="row">
      <h3 style = "color:silver; margin-left:5px">${data[i].name}</h3>
  </div>
  <div class="row">
      <a style="color: #a1863d;" href="#">
      <i style="margin-left:5px" class="fa fa-map-marked"> ${data[i].city}</i></a>
  
  </div>
      <div style="margin-left: -5px; color:silver" class="row">
      ${data[i].dim}
      </div>
  <div class="row">
      <div style="color: #a1863d;" class="col"> 
          <i style="color: #a1863d;" class="fa fa-bed"></i> ${data[i].bed}  <br>
          <i style="color: #a1863d;" class="fa fa-bath"></i>${data[i].bath}   <br> 
          <i style="color: #a1863d;" class="fa fa-ruler"></i>${data[i].sqrft}  Sqft <br> 
      </div>
  
  </div>
  <div style="color: silver; margin-left: -6px;" class="row"> AED
  ${data[i].price }
  </div>
  <div style="width: auto;" class="row">
      <div style="width: auto; margin-left: 5px; margin-top:20px" class="col">
          <button style="width: 95px; background-color: black; border:1px solid #CFB53B; border-radius:6px;  "><i style="color: #a1863d;" class="fa fa-phone"></i></button>
       
          <button style="width: 95px; background-color: black;border:1px solid #CFB53B; border-radius:6px;"><i style="color: #a1863d;" class="fa fa-mail-bulk"></i></button> 
      
          <button style="width: 95px; background-color: black; border:1px solid #CFB53B; border-radius:6px;"><i style="color: #a1863d;" class="fa fa-phone-square"></i> </button>
      </div>
  </div>` ;
  
  card.innerHTML += detail;
  main.appendChild(card);
  
  });
  
  const dataDiv = document.getElementById('data');
const limit = 6; // Set the desired limit of items to display

// Function to update the displayed items based on the limit
function updateDisplayedItems() {
  const items = dataDiv.children;
  
  // Hide all items
  for (let i = 0; i < items.length; i++) {
    items[i].style.display = 'none';
  }
  
  // Show items up to the limit
  for (let i = 0; i < limit && i < items.length; i++) {
    items[i].style.display = 'block';
  }
}

// Call the function initially
updateDisplayedItems();
//   //2nd Column data
//   const data1 = [
//     {
//       imgO : "../assets/images/property/6.webp",
//       name : "Royal",
//       city : "Down town",
//       dim : "Appartment",
//       bed : "1",
//       bath : "1",
//       sqrft : "640",
//       price : "650000",
//       owner:"ASif",
//       live: "Dubai",
      
//     }
    
  
   
    
//   ];
//   data1.forEach((element1 , j) => {
    
//   console.log(element1);
//   const main1 = document.querySelector("#dataT");
//   console.log(main1);
//   const card1 = document.createElement("div");
//   card1.classList = card1;
//   const detail1 =
//   `
//   <img style="width: auto; height: 200px; margin-top:20px;margin-bottom:20px; border: 1px solid #CFB53B; border-radius:5px;" src="${data1[j].imgO}"/>
//   <div style="width:auto;" class="row">
//       <h3 style = "color:silver; margin-left:5px">${data1[j].name}</h3>
//   </div>
//   <div class="row">
//       <a style="color: #a1863d;" href="#">
//       <i style="margin-left:5px" class="fa fa-map-marked"> ${data1[j].city}</i></a>
  
//   </div>
//       <div style="margin-left: -5px; color:silver" class="row">
//       ${data1[j].dim}
//       </div>
//   <div class="row">
//       <div style="color: #a1863d;" class="col"> 
//           <i style="color: #a1863d;" class="fa fa-bed"></i> ${data1[j].bed}  <br>
//           <i style="color: #a1863d;" class="fa fa-bath"></i>${data1[j].bath}   <br> 
//           <i style="color: #a1863d;" class="fa fa-ruler"></i>${data1[j].sqrft}  Sqft <br> 
//       </div>
  
//   </div>
//   <div style="color: silver; margin-left: -6px;" class="row"> AED
//   ${data1[j].price }
//   </div>
//   <div style="width: auto;" class="row">
//       <div style="width: auto; margin-left: 5px; margin-top:20px" class="col">
//           <button style="width: 95px; background-color: black; border:1px solid #CFB53B; border-radius:6px; "><i style="color: #a1863d;" class="fa fa-phone"></i></button>
       
//           <button style="width: 95px; background-color: black; border:1px solid #CFB53B; border-radius:6px;"><i style="color: #a1863d;" class="fa fa-mail-bulk"></i></button> 
      
//           <button style="width: 95px; background-color: black; border:1px solid #CFB53B; border-radius:6px;"><i style="color: #a1863d;" class="fa fa-phone-square"></i> </button>
//       </div>
//   </div>` ;
  
//   card1.innerHTML += detail1;
//   main1.appendChild(card1);
  
//   });
//   //3rd column
//   const dataT1 = [
//       {
          
//           img : "../assets/images/property/1.webp",
//           name : "Royal",
//           city : "Down town",
//           dim : "Appartment",
//           bed : "1",
//           bath : "1",
//           sqrft : "640",
//           price : "650000",
//           owner:"ASif",
//           live: "Dubai",
        
//       }
    
     
    
  
      
//     ];
//     dataT1.forEach((element2 , k) => {
//       console.log(element2)
    
//     const maint1 = document.querySelector("#dataT1");
//     console.log(maint1);
//     const cardt1 = document.createElement("div");
//     cardt1.classList = cardt1;
//     const detailt1 =
//     `
//     <img style="width: auto; height: 200px; margin-top:20px;margin-bottom:20px; border: 1px solid #CFB53B; border-radius:5px;" src="${dataT1[k].img}"/>
//     <div style="width:auto;" class="row">
//         <h3 style = "color:silver; margin-left:5px">${dataT1[k].name}</h3>
//     </div>
//     <div class="row">
//         <a style="color: #a1863d;" href="#">
//         <i style="margin-left:5px" class="fa fa-map-marked"> ${dataT1[k].city}</i></a>
    
//     </div>
//         <div style="margin-left: -5px; color:silver" class="row">
//         ${dataT1[k].dim}
//         </div>
//     <div class="row">
//         <div style="color: #a1863d;" class="col"> 
//             <i style="color: #a1863d;" class="fa fa-bed"></i> ${dataT1[k].bed}  <br>
//             <i style="color: #a1863d;" class="fa fa-bath"></i>${dataT1[k].bath}   <br> 
//             <i style="color: #a1863d;" class="fa fa-ruler"></i>${dataT1[k].sqrft}  Sqft <br> 
//         </div>
    
//     </div>
//     <div style="color: silver; margin-left: -6px;" class="row"> AED
//     ${dataT1[k].price }
//     </div>
//     <div style="width: auto;" class="row">
//         <div style="width: auto; margin-left: 5px; margin-top:20px" class="col">
//             <button style="width: 95px; background-color: black; border:1px solid #CFB53B; border-radius:6px;  "><i style="color: #a1863d;" class="fa fa-phone"></i></button>
         
//             <button style="width: 95px; background-color: black;border:1px solid #CFB53B; border-radius:6px;"><i style="color: #a1863d;" class="fa fa-mail-bulk"></i></button> 
        
//             <button style="width: 95px; background-color: black; border:1px solid #CFB53B; border-radius:6px;"><i style="color: #a1863d;" class="fa fa-phone-square"></i> </button>
//         </div>
//     </div>` ;
    
//     cardt1.innerHTML += detailt1;
//     maint1.appendChild(cardt1);
    
//     });
  
//   // function sendEmail() {
      
//   //     Email.send({
//   //         Host : "smtp.gmail.com",
//   //         Username : "Asifnawazkhan8@gmail.com",
//   //         Password : "007Nightfire",
//   //         To : 'asifkhattackhere@gmail.com',
//   //         From : document.getElementById("Email").value,
//   //         Subject : "Vixion capital Real Estate",
//   //         Body : "Name: " + document.getElementById("Name").value
//   //             + " <br> Phone :" + document.getElementById("phone").value 
//   //     }).then(
//   //       message => alert("Messege send successfully")
//   //     )
//   // }
  
  
//   // class Detail{
//   //   constructor(id,img,name,city,dim,bed,bath,sqrft,price){
//   //     this.id = id;
//   //     this.img = img;
//   //     this.name = name;
//   //     this.city = city;
//   //     this.dim = dim;
//   //     this.bed = bed;
//   //     this.bath = bath;
//   //     this.sqrft = sqrft;
//   //     this.price = price;
  
//   //   }
//   // }
//   // var detailOne = new Detail('','img.src="../main/assets/property/1.jpg"','Royal','down town','Appartment','1','1','640','650000');
  
//   /* id: Number
//   img: String
//   name: String
//   city: String
//   dim: String
//   bed: Number
//   bath: Number
//   sqrft: BigInt
//   price: Number
  
//   det1:Detail()
//   det1.img = ../main/asset/property/1.jpg
//   det1.name ='Royal'
//   det1.id ='1'
//   det1.city = 'Down town'
//   det1.dim = 'Appartment'
//   det1.bed = '1'
//   det1.bath = '1'
//   det1.sqrft = '640'
//   det1.price = '650000' */
  
  