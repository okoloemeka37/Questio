  const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

const msgBtn=document.querySelector("#msgBtn");

msgBtn.addEventListener("click",()=>{
    const name=document.querySelector("#name").value
    const email=document.querySelector("#email").value
    const message=document.querySelector("#message").value
    const subject=document.querySelector("#subject").value;

    const entries=document.querySelectorAll(".indexCon");
let hasError = false;

entries.forEach(entry => {
    let rt = "#err" + entry.id;

    if (entry.value.trim().length === 0) {
        document.querySelector(rt).innerHTML = `The ${entry.id} field is required`;
        hasError = true;
    } else {
        document.querySelector(rt).innerHTML = "";
    }
});

// Stop here if there are validation errors
if (hasError) {
    return;
}

document.querySelector("#msgLoader").classList.replace("hidden", "inline-block");

const body = { name, email, message, subject };

fetch("/IndexSendMessage", {
    method: "POST",
    headers: {
        "Content-Type": "application/json",
        "X-CSRF-TOKEN": csrfToken,
    },
    body: JSON.stringify(body),
})
.then(res => res.json())
.then(res => {

    document.querySelector("#msgLoader").classList.replace("inline-block", "hidden");

    if (res.success) {

        document.querySelector("#successBanner").classList.remove("hidden");

        entries.forEach(entry => {
            entry.value = "";
        });

        setTimeout(() => {
            document.querySelector("#successBanner").classList.add("hidden");
        }, 4000);

    } else {
        document.querySelector("#errorBanner").classList.remove("hidden");
        console.error(res.error);

        document.querySelector("#errorBanner").innerText += res.error.message.substring(0,20);

        setTimeout(() => {
              document.querySelector("#errorBanner").classList.add("hidden");
        }, 7000);
    }

})
.catch(err => {
            document.querySelector("#errorBanner").classList.remove("hidden");

    document.querySelector("#msgLoader").classList.replace("inline-block", "hidden");

    console.error(err);

    document.querySelector("#errorBanner").innerText +="An unexpected error occurred.";
 setTimeout(() => {
              document.querySelector("#errorBanner").classList.add("hidden");
        }, 7000);
});


})