const wrapper = document.querySelector('.wrapper');
const login_link = document.querySelector('.login_link');
const register_link = document.querySelector('.register_link');

register_link.addEventListener('click',()=>
{
    wrapper.classList.add('active');

});
login_link.addEventListener('click',()=>
{
    wrapper.classList.add('active');
});
