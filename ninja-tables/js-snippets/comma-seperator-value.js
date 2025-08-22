let cellVal = document.querySelectorAll('td.idd');
let makeitArr = Array.from(cellVal);
makeitArr.forEach((cell)=>{
    let cellVal = cell.innerText;
    let SeparatedNum = Number(cellVal).toLocaleString("en-US");
    cell.innerText = SeparatedNum;
});

// https://prnt.sc/YBQBJg5VrEMf
