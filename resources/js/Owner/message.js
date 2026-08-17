///THIS PAGE HOLD ALL OWNER MESSAGE LOGIC 

//show reply send on click of Show-Reply-Section

const Show_Reply_Section=document.querySelector("#Show-Reply-Section");
Show_Reply_Section.addEventListener('click',()=>{
    const C_M_R_S=document.querySelector("#Contact-Message-Reply-Section")

    if (C_M_R_S.classList.contains('opacity-100')) {
        C_M_R_S.classList.replace('grid-rows-[1fr]',"grid-rows-[0fr]");
        C_M_R_S.classList.replace('opacity-100',"opacity-0");
    }else{
    C_M_R_S.classList.replace('grid-rows-[0fr]',"grid-rows-[1fr]");
    C_M_R_S.classList.replace('opacity-0',"opacity-100");
    }

})