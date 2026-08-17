///THIS PAGE HOLD ALL OWNER NOTIFICATION LOGIC 

//NOTIFICATION DROP-DOWN HOME PAGE
const viewNote=document.querySelector("#viewNote");

viewNote.addEventListener("click",()=>{
    document.querySelector("#SideMsg").classList.replace('hidden','flex');
})

const closeSideMsg=document.querySelector("#closeSideMsg");

closeSideMsg.addEventListener("click",()=>{
    document.querySelector("#SideMsg").classList.replace('flex','hidden');
})