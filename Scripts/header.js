const bars = document.getElementById('bars')
const close = document.getElementById('close')
const navigation = document.getElementById('navigation')
bars.addEventListener('click', function(){
  navigation.classList.add('active')
})
close.addEventListener('click', function(){
  navigation.classList.remove('active')
})