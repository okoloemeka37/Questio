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

///Chossing Agents in individual fields

if (document.querySelector("#Chooseagent")) {
   const Chooseagent=document.querySelector("#Chooseagent");

Chooseagent.addEventListener('change', function () {
    const opt = this.options[this.selectedIndex];

    const name=opt.getAttribute('name');
    const email=opt.getAttribute('email');
    document.querySelector("#ChEmail").innerHTML=email
    document.querySelector("#ChIcon").innerHTML=name[0]
    document.querySelector("#ChName").innerHTML=name
  const SaveChoiceAgent=  document.querySelector(".SaveChoiceAgent")
  SaveChoiceAgent.id=opt.id;
  SaveChoiceAgent.classList.remove('hidden');

}); 






}


const SaveChoiceAgent=document.querySelector(".SaveChoiceAgent");

        SaveChoiceAgent.addEventListener('click',async()=>{

     document.querySelector("#loadingBar").classList.replace('opacity-0','opacity-100')
        const agent_id=SaveChoiceAgent.id;
        const field_id=SaveChoiceAgent.getAttribute('field_id');
         const name=document.querySelector("#ChName").innerHTML;
          const email= document.querySelector("#ChEmail").innerHTML;
        const a_Id=SaveChoiceAgent.getAttribute('a_Id');
        const body={agent_id,field_id,a_Id}


       const resp=await fetch('/api/SaveChoiceAgent',{method:'POST', headers: { "Content-Type": "application/json"},body:JSON.stringify(body)})
            const res=await resp.json();
        if (resp.ok) {
               document.querySelector("#successBanner").classList.remove('hidden');
            document.querySelector("#loadingBar").classList.replace('opacity-100','opacity-0');


                const claAng=".agent"+agent_id;

            document.querySelector(claAng).remove()
            document.querySelector("#ChEmail").innerHTML=''
    document.querySelector("#ChIcon").innerHTML=''
    document.querySelector("#ChName").innerHTML=''
  const SaveChoiceAgent=  document.querySelector(".SaveChoiceAgent")
  SaveChoiceAgent.id='';
  SaveChoiceAgent.classList.add('hidden');


  ///Add Chosen Agent to list

  const AgentTem=  `   <div class="flex items-center justify-between
                    gap-4 px-6 py-4">

            <div class="flex min-w-0 items-center gap-3">

                <!-- Avatar -->
                <div
                    class="flex h-10 w-10 shrink-0 items-center
                           justify-center rounded-full
                           bg-sky-100 text-sm font-bold
                           text-sky-700">${name[0]}</div>


                <!-- Details -->
                <div class="min-w-0">

                    <p class="truncate text-sm font-semibold
                              text-gray-800"> ${name}   </p>

                    <p class="truncate text-xs text-gray-500">${email} </p>

                </div>

            </div>


            <!-- Remove -->
            <button 
                type="button"
                id="${agent_id}"  field_id="${field_id}" a_Id="${a_Id}" name="${name}" email="${email}"
                class="UnassignAgent shrink-0 rounded-lg p-2
                       text-gray-400 transition
                       hover:bg-red-50 hover:text-red-600"
                title="Remove agent">

                <svg xmlns="http://www.w3.org/2000/svg"
                     class="h-5 w-5"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M6 18L18 6M6 6l12 12"/>

                </svg>

            </button>

        </div>`

        document.querySelector("#AgentList").innerHTML +=AgentTem;

        unassign()
        
   const AgentsInFieldCount= document.querySelector("#AgentsInFieldCount").innerHTML;
           const newcount= Number(AgentsInFieldCount) +1
            document.querySelector("#AgentsInFieldCount").innerHTML=newcount

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


///UNASSIGNING AGENTS FROM FIELD


function unassign(){

    const UnassignAgent=document.querySelectorAll(".UnassignAgent");
UnassignAgent.forEach(e=>{
    e.addEventListener('click',async()=>{
        const agent_id=e.id;
        const a_Id=e.getAttribute('a_Id');
        const name=e.getAttribute('name');
        const email=e.getAttribute('email');
        const field_id=e.getAttribute('field_id');
const body={agent_id,a_Id,field_id}
 document.querySelector("#loadingBar").classList.replace('opacity-0','opacity-100')

        const resp=await fetch('/api/UnassignAgent',{method:'POST', headers: { "Content-Type": "application/json"},body:JSON.stringify(body)})

        const res=await resp.json();
  if (resp.ok) {

    //adding option to the select list
    const opt=document.createElement('option');
    opt.innerHTML=name;
    opt.className="agent"+agent_id;
    opt.setAttribute('name',name);
    opt.setAttribute('email',email);
    opt.id=agent_id

    document.querySelector('#Chooseagent').append(opt);

               document.querySelector("#successBanner").classList.remove('hidden');
            document.querySelector("#loadingBar").classList.replace('opacity-100','opacity-0');
            
            //remove clicked agent from list
            e.parentElement.remove()
            
            //subtracting one from total AgentsInFieldCount

           const AgentsInFieldCount= document.querySelector("#AgentsInFieldCount").innerHTML;
           const newcount= Number(AgentsInFieldCount) -1
            document.querySelector("#AgentsInFieldCount").innerHTML=newcount
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
}

unassign()