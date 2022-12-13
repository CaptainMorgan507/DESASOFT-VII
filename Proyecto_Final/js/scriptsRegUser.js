(() =>{
    //Base para REST API POST
    async function postData(url='',data={}){
        const response = await fetch(url, {
            method:'POST',
            mode:'cors',
            cache: 'no-cache',
            credentials:'same-origin',
            headers:{
                'Content-Type':'application/json'
            },
            redirect: 'follow',
            referrerPolicy:'no-referrer',
            body: JSON.stringify(data)
        });
        return response.json();
    }

    console.log("Executed");

    const createknowForm = document.getElementById('user_register');
    const createknowFormHandler = async (event)=>{
        event.preventDefault();
        const name= document.querySelector("#user_register input[name='name']").value;
        const lastname= document.querySelector("#user_register input[name='lastname']").value;
        const email= document.querySelector("#user_register input[name='email']").value;
        const user_id= document.querySelector("#user_register input[name='user_id']").value;
        const dir= document.querySelector("#user_register input[name='dir']").value;
        const b_date= document.querySelector("#user_register input[name='b_date']").value;
        const cphone1= document.querySelector("#user_register input[name='cphone1']").value;
        const cphone2= document.querySelector("#user_register input[name='cphone2']").value;
        const cphone3= document.querySelector("#user_register input[name='cphone3']").value;
        const pass1= document.querySelector("#user_register input[name='pass1']").value;
        
        try{
            const response = await postData('http://localhost/Proyecto_Final/classes/API/API_LoginRegister.php', {name,
                                                                                                                lastname,
                                                                                                                email,
                                                                                                                user_id,
                                                                                                                dir,
                                                                                                                b_date,
                                                                                                                cphone1,
                                                                                                                cphone2,
                                                                                                                cphone3,
                                                                                                                pass1});
            
            alert('Se agrego el usuario de forma correcta.');
            window.location.href="./index.php";    
        }
        catch(error){
            alert('Error en la petición.');
            console.table(response);
        }
        
        
    };
    createknowForm.addEventListener('submit',createknowFormHandler);
    
})();