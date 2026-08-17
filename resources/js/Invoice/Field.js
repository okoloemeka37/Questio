/// This file contains all script for the invoice field

//Field_Change_Active_Status

const Field_Change_Active_Status=document.querySelectorAll(".Field_Change_Active_Status");

Field_Change_Active_Status.forEach(fc=>{
    fc.addEventListener('click',async()=>{

        //remove hidden class from loading bar.
        document.querySelector("#loadingBar").classList.replace('opacity-0','opacity-100')
    
        const id=fc.id;

          const resp=await fetch('/api/Field_Change_Active_Status',{method:'POST', headers: { "Content-Type": "application/json"},body:JSON.stringify({id:Number(id)})})
         
                const res=await resp.json()
            if (resp.ok) {
                console.log(res)
            document.querySelector("#successBanner").classList.remove('hidden');
            document.querySelector("#loadingBar").classList.replace('opacity-100','opacity-0');
                
            //change status color
             const fieldPointer='#fieldPoint'+id;
             const actfield="#actfield"+id

            if (res.data.type=='inactive') {  
                document.querySelector(fieldPointer).classList.replace("text-green-700","text-red-700")
                 document.querySelector(fieldPointer).classList.replace("bg-green-100","bg-red-100")
                document.querySelector(actfield).classList.replace("bg-green-500","bg-red-500");
                document.querySelector(".wro").innerHTML='Inactive'
            }else if(res.data.type=='active'){
                 document.querySelector(fieldPointer).classList.replace("text-red-700","text-green-700")
                 document.querySelector(fieldPointer).classList.replace("bg-red-100","bg-green-100")
                document.querySelector(actfield).classList.replace("bg-red-500","bg-green-500")
                document.querySelector('.wro').innerHTML='Active'
            }

              setTimeout(() => {
            document.querySelector("#successBanner").classList.add("hidden");
        }, 4000);
            }else{
            const errorBanner=document.querySelector("#errorBanner")
                errorBanner.classList.remove('hidden');
                errorBanner.innerHTML +=res.error.message
            document.querySelector("#loadingBar").classList.replace('opacity-100','opacity-0')

             setTimeout(() => {
              document.querySelector("#errorBanner").classList.add("hidden");
        }, 7000);
            }
        
    
    })
})