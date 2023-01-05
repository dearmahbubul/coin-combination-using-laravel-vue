import{w as u,v as g,o as n,c as r,a as e,t as a,u as _,b as l,d as i,e as h,f as p,F as m,r as x,g as f,H as b}from"./app-d1f138e9.js";const y={class:"text-sm text-red-600"},v={__name:"InputError",props:["message"],setup(t){return(s,c)=>u((n(),r("div",null,[e("p",y,a(t.message),1)],512)),[[g,t.message]])}},w={class:"relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0"},k={class:"max-w-6xl mx-auto sm:px-6 lg:px-8"},S={class:"mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg"},$={class:"grid grid-cols-1"},B={class:"bg-white shadow sm:rounded-lg"},D={class:"px-4 py-5 sm:p-6"},F=e("h3",{class:"text-lg font-medium leading-6 text-gray-900"},"Distribute your coin combination",-1),N=e("div",{class:"mt-2 max-w-xl text-sm text-gray-500"},[e("p",null,"Change the coin contribution.")],-1),V=["onSubmit"],A={class:"w-full sm:max-w-xs"},j={class:"relative mt-1 rounded-md shadow-sm"},C=e("div",{class:"pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3"},[e("span",{class:"text-gray-500 sm:text-sm"},"$")],-1),E=e("div",{class:"pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3"},[e("span",{class:"text-gray-500 sm:text-sm",id:"price-currency"},"USD")],-1),H=["disabled"],M={key:0,class:"mt-6 flow-root"},U={class:"text-lg font-medium leading-6 text-gray-900 mb-4"},W={role:"list",class:"-my-5 divide-y divide-gray-200"},q={class:"flex items-center space-x-4"},G={class:"min-w-0 flex-1"},I={class:"truncate text-sm font-medium text-gray-900"},L={href:"#",class:"inline-flex items-center rounded-full border border-gray-300 bg-white px-2.5 py-0.5 text-sm font-medium leading-5 text-gray-700 shadow-sm hover:bg-gray-50"},J={__name:"Welcome",props:{combinations:Array,originalAmount:Number},setup(t){const s=_({price:""}),c=()=>{s.post(route("coin-generator.make"),{onFinish:()=>s.reset()})};return(T,d)=>(n(),r(m,null,[l(i(b),{title:"Welcome"}),e("div",w,[e("div",k,[e("div",S,[e("div",$,[e("div",B,[e("div",D,[F,N,e("form",{class:"mt-5 sm:flex sm:items-center",onSubmit:h(c,["prevent"])},[e("div",A,[e("div",j,[C,u(e("input",{type:"text","onUpdate:modelValue":d[0]||(d[0]=o=>i(s).price=o),name:"price",id:"price",autofocus:"",required:"",class:"block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm",placeholder:"0.00","aria-describedby":"price-currency"},null,512),[[p,i(s).price]]),E]),l(v,{class:"mt-2",message:i(s).errors.price},null,8,["message"])]),e("button",{disabled:i(s).processing,type:"submit",class:"mt-3 inline-flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm"},"Generate",8,H)],40,V),t.combinations?(n(),r("div",M,[e("h3",U,"Best combination of $"+a(t.originalAmount),1),e("ul",W,[(n(!0),r(m,null,x(t.combinations,o=>(n(),r("li",{key:o.name,class:"py-4"},[e("div",q,[e("div",G,[e("p",I,a(o.name+" ($"+o.amount+")"),1)]),e("div",null,[e("a",L,a(o.total),1)])])]))),128))])])):f("",!0)])])])])])])],64))}};export{J as default};
