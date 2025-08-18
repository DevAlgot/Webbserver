function start(){
    let quest = document.getElementById("questions");
    let questions = "";

    for(let i = 0; i < 10; i++) {
        quest.innerHTML += `
        <label name ="b${i+1}">${getRandomArbitrary(1, 10)} + ${getRandomArbitrary(1, 10)} = </label>
        <input type="text" name="q${i+1}">
       <br>
       `
        
   }
   console.log(questions);
   
    quest.innerHTML +=`
       <input type="submit" value="Rätta"></input>`

}


window.onload = start;


function getRandomArbitrary(min, max) {
  return Math.round(Math.random() * (max - min) + min);
}

    