const COLORS={purple:'#865ab7',pink:'#e78ba8',blue:'#69b6d1',teal:'#5cb5a5',gold:'#e5b45f',slate:'#8d8fae'};let D,charts={},index=0;const slides=[...document.querySelectorAll('.slide')];const fmt=n=>new Intl.NumberFormat('es-AR').format(n);const pct=n=>new Intl.NumberFormat('es-AR',{maximumFractionDigits:1}).format(n)+'%';function go(n){index=Math.max(0,Math.min(slides.length-1,n));slides.forEach((s,i)=>{s.classList.toggle('active',i===index);if(i===index){s.classList.remove('reveal-ready');void s.offsetWidth;s.classList.add('reveal-ready')}else{s.classList.remove('reveal-ready')}});document.querySelector('#counter').textContent=String(index+1).padStart(2,'0')+' / '+slides.length;document.querySelector('#progress').style.width=((index+1)/slides.length*100)+'%';document.querySelector('#prev').disabled=index===0;document.querySelector('#next').disabled=index===slides.length-1;history.replaceState(null,'','#'+slides[index].id);window.scrollTo({top:0,behavior:'instant'});requestAnimationFrame(()=>{Object.values(charts).forEach(c=>c.resize()); const active=slides[index]; active.querySelectorAll('canvas').forEach(el=>{const c=charts[el.id];if(c){if(c.config.type==='bar'&&c.options.indexAxis==='y')c.animateBars();else{el.classList.remove('chart-appear');void el.offsetWidth;el.classList.add('chart-appear')}}});active.querySelectorAll('.neighbor-bars').forEach(el=>{el.classList.remove('neighbor-animate');void el.offsetWidth;el.classList.add('neighbor-animate')});active.querySelectorAll('.recovery-svg').forEach(el=>{el.classList.remove('chart-appear');void el.offsetWidth;el.classList.add('chart-appear')})})}document.querySelector('#prev').onclick=()=>go(index-1);document.querySelector('#next').onclick=()=>go(index+1);document.querySelector('#restart').onclick=()=>go(0);document.addEventListener('keydown',e=>{if(['INPUT','SELECT','TEXTAREA'].includes(document.activeElement.tagName))return;if(['ArrowRight','ArrowDown','PageDown',' '].includes(e.key)){e.preventDefault();go(index+1)}if(['ArrowLeft','ArrowUp','PageUp'].includes(e.key)){e.preventDefault();go(index-1)}if(e.key==='Home')go(0);if(e.key==='End')go(slides.length-1)});let tx=0;document.addEventListener('touchstart',e=>tx=e.changedTouches[0].screenX,{passive:true});document.addEventListener('touchend',e=>{let delta=e.changedTouches[0].screenX-tx;if(Math.abs(delta)>95)go(index+(delta<0?1:-1))},{passive:true});function chart(id,type,labels,datasets,opts={}){let el=document.getElementById(id);charts[id]=new Chart(el,{type,data:{labels,datasets},options:{responsive:true,maintainAspectRatio:false,animation:{duration:500},plugins:{legend:{display:datasets.length>1,position:'bottom',labels:{usePointStyle:true,boxWidth:9,font:{family:'DM Sans'}}},tooltip:{callbacks:{label:c=>`${c.dataset.label?c.dataset.label+': ':''}${fmt(c.chart.options.indexAxis==='y'?c.parsed.x:(c.parsed.y??c.parsed.x??c.parsed))}${opts.percent?'%':''}`}}},scales:type==='doughnut'?{}:{x:{grid:{display:false},ticks:{color:'#84798e',maxRotation:45}},y:{beginAtZero:!opts.base100,grid:{color:'#f0ebf4'},ticks:{color:'#84798e',callback:v=>opts.percent?v+'%':v>=1e6?(v/1e6).toFixed(1)+' M':fmt(v)}}},...opts}})}function bar(id,labels,values,colors,opts={}){chart(id,'bar',labels,[{label:'Viajes',data:values,backgroundColor:colors,borderRadius:7,maxBarThickness:55}],opts)}function make(){const years=Object.keys(D.annual);document.querySelector('#metric-total').textContent=(D.total/1e6).toFixed(1).replace('.',',')+' M';bar('annualChart',years,years.map(y=>D.annual[y]),years.map(y=>y==='2021'?COLORS.pink:y==='2019'?COLORS.purple:y==='2026'?COLORS.gold:COLORS.blue));const months=['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'];makeMonthlySelector(months);let ry=['2019','2020','2021','2022','2023','2024','2025'];chart('reboundChart','line',['2019','2020','2021','2022','2023'],[{label:'Viajes',data:['2019','2020','2021','2022','2023'].map(y=>D.annual[y]),borderColor:'#eaa05b',backgroundColor:'rgba(234,160,91,.24)',borderWidth:4,pointRadius:5,fill:true}],{plugins:{legend:{display:false}}});let entries=Object.entries(D.origin).sort((a,b)=>b[1]-a[1]);
const originPalette=['#6bd1c0','#ffaf6c','#7da5ff','#e68fc0','#e5d47c','#a2b5ff','#9fdfad','#f1a3a3','#b18ac8'];
function renderOrigins(){
 const count=Number(document.querySelector('#originCount')?.value||8);
 const subset=entries.slice(0,count);
 if(charts.originChart){charts.originChart.destroy();delete charts.originChart}
 chart('originChart','bar',subset.map(e=>e[0]),[{label:'Viajes',data:subset.map(e=>e[1]),backgroundColor:subset.map((e,i)=>originPalette[i]),borderRadius:6}],{animateBars:true,indexAxis:'y',plugins:{legend:{display:false}},scales:{x:{beginAtZero:true,ticks:{callback:v=>(v/1e6).toFixed(0)+' M'}},y:{grid:{display:false}}}});
}
document.querySelector('#originCount').onchange=renderOrigins;renderOrigins();let neighbor=['Brasil','Chile','Uruguay','Paraguay','Bolivia'].reduce((s,k)=>s+D.origin[k],0);let share=neighbor/D.total*100;document.querySelector('#neighbors-number').textContent=pct(share);makeTransport()}

function makeMonthlySelector(months){
 const box=document.querySelector('#yearSelector');
 const palette={'2019':'#865ab7','2020':'#e78ba8','2021':'#e5b45f','2022':'#5cb5a5','2023':'#69b6d1','2024':'#b18ac8','2025':'#d68c67','2026':'#467e9c'};
 const selected=new Set(['2019','2020','2023']);
 const years=Object.keys(D.monthly).sort();
 function render(){
  years.forEach(y=>{const b=box.querySelector('[data-year="'+y+'"]');b.classList.toggle('selected',selected.has(y));b.setAttribute('aria-pressed',String(selected.has(y)))});
  if(charts.pandemicChart){charts.pandemicChart.destroy();delete charts.pandemicChart}
  const datasets=years.filter(y=>selected.has(y)).map(y=>({label:y,data:D.monthly[y],borderColor:palette[y],backgroundColor:palette[y],tension:.25,pointRadius:5,borderWidth:3}));
  if(datasets.length)chart('pandemicChart','line',months,datasets);
  else {const canvas=document.querySelector('#pandemicChart');canvas.getContext('2d').clearRect(0,0,canvas.width,canvas.height)}
 }
 years.forEach(y=>{const b=document.createElement('button');b.type='button';b.dataset.year=y;b.textContent=y;b.style.setProperty('--year-color',palette[y]);b.setAttribute('aria-label','Mostrar u ocultar '+y);b.onclick=()=>{selected.has(y)?selected.delete(y):selected.add(y);render()};box.appendChild(b)});
 render();
}

function makeHeat(months){let box=document.querySelector('#heatmap');box.innerHTML='<div></div>'+months.map(m=>'<div class="axis">'+m+'</div>').join('');let rows=D.heatOrigin.values,labels=D.heatOrigin.labels,all=rows.flat(),max=Math.max(...all);function color(t){const stops=[[255,255,217],[199,233,180],[127,205,187],[65,182,196],[29,145,192],[34,94,168],[12,44,122]];let x=Math.max(0,Math.min(.999,t))*(stops.length-1),i=Math.floor(x),f=x-i;return 'rgb('+stops[i].map((v,k)=>Math.round(v+(stops[i+1][k]-v)*f)).join(',')+')'}rows.forEach((row,i)=>{let label=document.createElement('div');label.className='axis';label.textContent=labels[i];box.appendChild(label);row.forEach((value,m)=>{let el=document.createElement('button');el.className='cell';let t=Math.pow(value/max,.7);el.style.background=color(t);el.style.color=t>.55?'white':'#244355';el.textContent=fmt(value);el.title=labels[i]+' · '+months[m]+': '+fmt(value)+' viajes promedio';el.setAttribute('aria-label',el.title);el.onclick=()=>{document.querySelector('#heat-value').textContent=fmt(value)+' viajes';document.querySelector('#heat-desc').textContent='Promedio mensual · '+labels[i]+' · '+months[m]};box.appendChild(el)})})}
function makeNeighbors(){
 const host=document.getElementById('neighborsChart');
 const countries=['Brasil','Chile','Uruguay','Paraguay','Bolivia'];
 const palette=['#6bd1c0','#ffaf6c','#7da5ff','#e68fc0','#e5d47c'];
 const values=countries.map(k=>Number(D.origin[k]||0));
 const max=Math.max(...values)*1.13;
 host.innerHTML='';
 const root=document.createElement('div');root.className='neighbor-bars';
 countries.forEach((name,i)=>{
   const row=document.createElement('div');row.className='neighbor-row';
   const label=document.createElement('span');label.className='neighbor-name';label.textContent=name;
   const track=document.createElement('div');track.className='neighbor-track';
   const fill=document.createElement('div');fill.className='neighbor-fill';fill.style.background=palette[i];fill.style.setProperty('--w',`${values[i]/max*100}%`);fill.title=`${name}: ${fmt(values[i])} viajes`;track.appendChild(fill);
   const number=document.createElement('strong');number.className='neighbor-value';number.textContent=(values[i]/1e6).toLocaleString('es-AR',{maximumFractionDigits:2})+' M';
   row.append(label,track,number);root.appendChild(row);
 });host.appendChild(root);
}
function makeRecovery(){
 const sel=document.querySelector('#originSelect'), recovery=D.recovery||{};
 const origins=Object.keys(recovery).filter(o=>recovery[o]&&Number(recovery[o]['2019'])>0).sort((a,b)=>(D.origin[b]||0)-(D.origin[a]||0));
 const holder=document.querySelector('#recoveryChart');sel.replaceChildren();
 origins.forEach(o=>sel.add(new Option(o,o)));
 if(!origins.length){holder.textContent='No hay datos comparables para este período.';return}
 sel.value=origins.includes('Brasil')?'Brasil':origins[0];
 function update(){
  const vals=recovery[sel.value],base=Number(vals['2019']),years=['2019','2023','2024','2025'];
  const points=years.map(y=>Number(vals[y])/base*100);
  document.querySelector('#recoveryBadge').textContent='Índice 2025: '+points[3].toLocaleString('es-AR',{maximumFractionDigits:1})+' · Base 2019 = 100';
  const max=Math.max(150,Math.ceil(Math.max(...points)/25)*25);
  const px=i=>100+i*270,py=v=>325-v/max*270;
  const grid=[0,50,100,150,200,250].filter(v=>v<=max).map(v=>`<line x1="90" x2="925" y1="${py(v)}" y2="${py(v)}" stroke="${v===100?'#5cb5a5':'#e9e3ef'}" stroke-width="${v===100?2:1}" stroke-dasharray="${v===100?'8 6':'none'}"/><text x="78" y="${py(v)+6}" text-anchor="end" font-size="16" fill="#776b83">${v}</text>`).join('');
  const line=points.map((v,i)=>`${px(i)},${py(v)}`).join(' ');
  holder.innerHTML=`<svg class="recovery-svg" viewBox="0 0 980 390" role="img" aria-label="Índice de recuperación de ${sel.value} con base 2019 igual a 100"><title>Recuperación de ${sel.value}, índice base 2019 igual a 100</title>${grid}<polyline points="${line}" fill="none" stroke="#865ab7" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" class="recovery-line"/>${years.map((y,i)=>`<circle cx="${px(i)}" cy="${py(points[i])}" r="7" fill="#865ab7"><title>${y}: índice ${points[i].toLocaleString('es-AR',{maximumFractionDigits:1})}</title></circle><text x="${px(i)}" y="${py(points[i])-19}" text-anchor="middle" font-size="17" font-weight="700" fill="#66408e">${points[i].toLocaleString('es-AR',{maximumFractionDigits:1})}</text><text x="${px(i)}" y="370" text-anchor="middle" font-size="18" fill="#70647d">${y}</text>`).join('')}</svg>`;
  holder.classList.remove('recovery-enter');void holder.offsetWidth;holder.classList.add('recovery-enter');
 }
 sel.onchange=update;update();
}
function makeTransport(){let ys=Object.keys(D.transport).filter(y=>!['2020','2021'].includes(y));let keys=['Aérea','Terrestre','Fluvial/Marítima'],colors=['#69b6d1','#e78ba8','#b18ac8'];let datasets=keys.map((k,i)=>({label:k,data:ys.map(y=>{let d=D.transport[y],total=Object.values(d).reduce((a,b)=>a+b,0);return total?100*(d[k]||0)/total:0}),backgroundColor:colors[i],borderColor:'#ffffff',borderWidth:1,stack:'transportes'}));charts.transportChart=new Chart(document.querySelector('#transportChart'),{type:'bar',data:{labels:ys.map(y=>y==='2026'?'2026*':y),datasets},options:{responsive:true,maintainAspectRatio:false,plugins:{legend:{position:'bottom'},tooltip:{callbacks:{label:c=>c.dataset.label+': '+pct(c.parsed.y)}}},scales:{x:{stacked:true,grid:{display:false},ticks:{maxRotation:45}},y:{stacked:true,min:0,max:100,ticks:{callback:v=>v+'%'},grid:{color:'#f0ebf4'}}}}})}
function initialize(){
  if (!window.TURISMO_DATA) {
    document.querySelector('#metric-total').textContent='97.999.975';
    showError('No se cargó data.js. Extraé el ZIP completo y mantené todos los archivos en la misma carpeta.');
    go(0);return;
  }
  D=window.TURISMO_DATA;
  // El mapa de calor no depende del motor de gráficos y debe funcionar por separado.
  try { makeHeat(['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic']); }
  catch(err){ console.error('Mapa de calor:',err);showError('Error en el mapa de calor: '+err.message); }
  try { makeRecovery(); } catch(err){console.error('Gráficos 8 y 9:',err);showError('Error en las páginas 8 y 9: '+err.message)}
  if(typeof window.Chart!=='function') {
    showError('No se cargó chart-local.js. Verificá que el ZIP esté descomprimido completo.');
    go(0);return;
  }
  try { make(); }
  catch(err){ console.error('Gráficos:',err);showError('Error al dibujar gráficos: '+err.message+' · '+(err.stack||'').split('\n').slice(1,2).join('')); }
  try { go(Math.max(0,slides.findIndex(s=>'#'+s.id===location.hash))); }
  catch(err){ console.error('Navegación:',err);showError('Error al mostrar diapositiva: '+err.message); }
}
function showError(message){
 const msg=document.createElement('div');msg.className='load-alert';msg.setAttribute('role','alert');msg.textContent=message;
 document.querySelector('#deck').prepend(msg);
}
initialize();
