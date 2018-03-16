// console.log( "Library Access Testing" );
// console.log( window.wp.element );


const { createElement } = wp.element;
console.log( createElement );
const el = createElement( ‘h1’, null, ‘Hello GB!’ );

console.log( el );
