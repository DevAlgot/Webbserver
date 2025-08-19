function start(){
    let quest = document.getElementById("questions");
    let questions = "";
    let x = ["+", "-", "*", "/"];

    for(let i = 0; i < 15; i++) {

        let random = `${getRandomArbitrary(1, 100)} + ${getRandomArbitrary(1, 10)}`;
        let evalResult = eval(random);

        quest.innerHTML += `
        <div class="question">
            <label name="ItemName">${random} = </label>
            <input type="hidden" name="a${i+1}" value="${evalResult}, ${random}">
            <input type="text" name="q${i+1}">
            <br>
       </div>
       `
        
   }
   console.log(questions);
   
    quest.innerHTML +=`
       <input id="submit" type="submit" value="Rätta"></input>`

}


window.onload = start;


function getRandomArbitrary(min, max) {
  return Math.round(Math.random() * (max - min) + min);
}

    