        window.onload = () => {
            setTimeout(()=>{
                document.querySelector("body").classList.add
                ("display")
            },3000);
        }

        document.querySelector(".hamburger-menu").
        addEventListener("click",()=>{ document.querySelector(".container").classList.toggle("change");})

        document.querySelector("#about").
        addEventListener("click",()=>{ document.querySelector(".container").classList.toggle("change");})
        document.querySelector("#home").
        addEventListener("click",()=>{ document.querySelector(".container").classList.toggle("change");})
        document.querySelector("#galery").
        addEventListener("click",()=>{ document.querySelector(".container").classList.toggle("change");})
        document.querySelector("#upit").
        addEventListener("click",()=>{ document.querySelector(".container").classList.toggle("change");})
        document.querySelector("#kontakt").
        addEventListener("click",()=>{ document.querySelector(".container").classList.toggle("change");})
        document.querySelector("#karta").
        addEventListener("click",()=>{ document.querySelector(".container").classList.toggle("change");})


        document.querySelector(".scroll-btn").addEventListener("click", ()=>{
        document.querySelector("html").style.scrollBehavior = "smooth";
        setTimeout(() => {
            document.querySelector("html").style.scrollBehavior = "unset";
        }, 1000);  
        })
        document.querySelector("#about").addEventListener("click", ()=>{
            document.querySelector("html").style.scrollBehavior = "smooth";
            setTimeout(() => {
            document.querySelector("html").style.scrollBehavior = "unset";
            }, 20000);  
        })
        document.querySelector("#home").addEventListener("click", ()=>{
            document.querySelector("html").style.scrollBehavior = "smooth";
            setTimeout(() => {
            document.querySelector("html").style.scrollBehavior = "unset";
            }, 20000);  
        })
        document.querySelector("#galery").addEventListener("click", ()=>{
            document.querySelector("html").style.scrollBehavior = "smooth";
            setTimeout(() => {
            document.querySelector("html").style.scrollBehavior = "unset";
            }, 20000);  
        })
        document.querySelector("#upit").addEventListener("click", ()=>{
            document.querySelector("html").style.scrollBehavior = "smooth";
            setTimeout(() => {
            document.querySelector("html").style.scrollBehavior = "unset";
            }, 20000);  
        })
        document.querySelector("#kontakt").addEventListener("click", ()=>{
            document.querySelector("html").style.scrollBehavior = "smooth";
            setTimeout(() => {
            document.querySelector("html").style.scrollBehavior = "unset";
            }, 20000);  
        })
        document.querySelector("#karta").addEventListener("click", ()=>{
            document.querySelector("html").style.scrollBehavior = "smooth";
            setTimeout(() => {
            document.querySelector("html").style.scrollBehavior = "unset";
            }, 20000);  
        })
        document.querySelector("#vise").addEventListener("click", ()=>{
          document.querySelector("html").style.scrollBehavior = "smooth";
          setTimeout(() => {
          document.querySelector("html").style.scrollBehavior = "unset";
          }, 20000);  
      })


        const inputField = document.querySelector('#name');
        const inputLabel = document.querySelector('.input-label');
      
        inputField.addEventListener('focus', () => {
          inputLabel.style.fontSize = '1.2rem';
          inputLabel.style.transform = 'translateY(-3rem)';
        });
      
        inputField.addEventListener('blur', () => {
          if (inputField.value) {
            inputLabel.style.color = '#4b4b4b';
          } else {
            inputLabel.style.fontSize = '1.8rem';
            inputLabel.style.transform = 'none';
            inputLabel.style.color = '#4b4b4b';
          }
        });
      
        if (inputField.value) {
          inputLabel.style.fontSize = '1.2rem';
          inputLabel.style.transform = 'translateY(-30%)';
        }


        const surname = document.querySelector('#surname');
        const surnamelabel = document.querySelector('#surnamelabel');
      
        surname.addEventListener('focus', () => {
          surnamelabel.style.fontSize = '1.2rem';
          surnamelabel.style.transform = 'translateY(-3rem)';
        });
      
        surname.addEventListener('blur', () => {
          if (surname.value) {
            surnamelabel.style.color = '#4b4b4b';
          } else {
            surnamelabel.style.fontSize = '1.8rem';
            surnamelabel.style.transform = 'none';
            surnamelabel.style.color = '#4b4b4b';
          }
        });
      
        if (surname.value) {
          surnamelabel.style.fontSize = '1.2rem';
          surnamelabel.style.transform = 'translateY(-30%)';
        }

        const email = document.querySelector('#email');
        const emaillabel = document.querySelector('#emaillabel');
      
        email.addEventListener('focus', () => {
          emaillabel.style.fontSize = '1.2rem';
          emaillabel.style.transform = 'translateY(-3rem)';
        });
      
        email.addEventListener('blur', () => {
          if (email.value) {
            emaillabel.style.color = '#4b4b4b';
          } else {
            emaillabel.style.fontSize = '1.8rem';
            emaillabel.style.transform = 'none';
            emaillabel.style.color = '#4b4b4b';
          }
        });
      
        if (email.value) {
          emaillabel.style.fontSize = '1.2rem';
          emaillabel.style.transform = 'translateY(-30%)';
        }

        const comment = document.querySelector('#comment');
        const commentlabel = document.querySelector('#commentlabel');
      
        comment.addEventListener('focus', () => {
          commentlabel.style.fontSize = '1.2rem';
          commentlabel.style.transform = 'translateY(-3rem)';
        });
      
        comment.addEventListener('blur', () => {
          if (comment.value) {
            commentlabel.style.color = '#4b4b4b';
          } else {
            commentlabel.style.fontSize = '1.8rem';
            commentlabel.style.transform = 'none';
            commentlabel.style.color = '#4b4b4b';
          }
        });
      
        if (comment.value) {
          commentlabel.style.fontSize = '1.2rem';
          commentlabel.style.transform = 'translateY(-30%)';
        }




    function relocate(){
        window.location.href("index.php")
    }


    


