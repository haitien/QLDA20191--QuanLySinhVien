function checkTime(time){
  let currentTime = time;
  if(time <10) currentTime="0" + currentTime;
  return currentTime
}

export function calculateTime(time){
  var hours, minutes, seconds, miniSeconds ;
  hours = parseInt(time / 3600000, 10);
  time %= 3600000;
  minutes = parseInt(time / 60000,10);
  time %=60000;
  seconds = parseInt(time / 1000,10);
  time %=1000;
  miniSeconds = parseInt(time / 10,10);

  hours = checkTime(hours);
  minutes = checkTime(minutes);
  seconds = checkTime(seconds);
  miniSeconds = checkTime(miniSeconds);

  let timeObj = hours + ":" + minutes + ":" +seconds + ":" + miniSeconds;
  return timeObj
}

export function styleDisplayTime(time){
  if (time<10000) return true;
  return false;
}