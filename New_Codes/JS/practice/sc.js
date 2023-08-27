// for(datesIndex in daysOfWeek){
//     dateName = daysOfWeek[datesIndex]
//     if(newD[dateName]==0){
//         // newD[daysOfWeek[4]] += D[key]
//         // TODO :- here if the zero is only one then we can find simply but if the zeroes are more we will count the no. of zeroes + 1 and divide it to the difference
//         if(newD[daysOfWeek[datesIndex+1]]!=0){
//             console.log(newD[daysOfWeek[datesIndex]])
//             datesIndex=parseInt(datesIndex)
//             newD[daysOfWeek[datesIndex]]=newD[daysOfWeek[datesIndex+1]]-(newD[daysOfWeek[datesIndex+1]]-newD[daysOfWeek[datesIndex-1]])/2
//             console.log(newD[daysOfWeek[datesIndex]])
//         } else{

//         }
//     }
// }
// var countZero=0;
// for (let i = 1; i < daysOfWeek.length-1; i++) {
//     if(newD[daysOfWeek[i]]!=0){
//         console.log(i)
//     } else{
//         if(newD[daysOfWeek[i+1]]!=0 ){
//             newD[daysOfWeek[i]]=(newD[daysOfWeek[i-1]]+(newD[daysOfWeek[i+1]]-newD[daysOfWeek[i-1]])/2)
//         } else{
//             flag=1
//             for (let j=i+1;j<daysOfWeek.length;j++){
//                 if(newD[daysOfWeek[j]]!=0 ){
//                     newD[daysOfWeek[i]]=(newD[daysOfWeek[i-1]]+(newD[daysOfWeek[i+1]]-newD[daysOfWeek[i-1]])/2)
//                 } else{
//                 }
//             }
//         }
//     }
// }

newD = { Mon: 120, Tue: 0, Wed: 10, Thu: 11, Fri: 0, Sat: 0, Sun: 14 };
daysOfWeek = ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"];
var countZero=0;
var amount = 0;
for (let i = 1; i < daysOfWeek.length-1; i++) {
    if(newD[daysOfWeek[i]]==0){
        if(newD[daysOfWeek[i+1]]!=0 && (i+1<daysOfWeek.length-1)){
            newD[daysOfWeek[i]]=((newD[daysOfWeek[i-1]])+(newD[daysOfWeek[i+1]]-newD[daysOfWeek[i-1]])/2);
            // console.log(newD[daysOfWeek[i-1]]);
            // console.log(newD[daysOfWeek[i+1]]);
            // console.log("Effect");
        } else{
            // If there are more than 2 zeroes so this will find no of zeroes
            countZero=1;
            for (let j=i+1;j<daysOfWeek.length-1;j++){
                if(newD[daysOfWeek[j]]==0 ){
                    countZero += 1;
                }
            }
            // This j is telling were to stop
            var j= i+countZero;
            // console.log(j,i-1);
            amount = (((newD[daysOfWeek[j]])-(newD[daysOfWeek[i-1]]))/(countZero+1));
            // console.log(amount);
            // console.log(newD[daysOfWeek[j]]);
            // console.log(newD[daysOfWeek[i-1]]);
            // console.log((14-10)/(countZero+1));
            for(let z=i;z<j;z++){
                newD[daysOfWeek[z]]=newD[daysOfWeek[z-1]]+amount;
            }
        }
    }
}
console.log(newD);