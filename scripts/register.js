const name =document.querySelector('#name');
const age =document.querySelector('#age');
const address =document.querySelector('#address');
const email =document.querySelector('#email');
const password =document.querySelector('#password');
const cpassword = document.querySelector('#confirm-password');
const form = document.querySelector('#form')


form.addEventListener('submit',async(e)=>{
    e.preventDefault();
    const data = new FormData(form)
    data.delete('confirm-password')
    data.append('method','register')
    const res = await axios.post('backend/router.php',data)
    console.log(res)
 
});

