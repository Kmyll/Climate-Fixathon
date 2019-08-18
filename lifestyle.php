<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/plugins/forceDirected.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/material.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
<?php include "header.php" ?>



<!--educate your kids-->

<div class="container lifestyle" id="top">
  <h1>Lifestyle</h1>

<p>Our day to day activities can greatly influence our carbon emission and therefore contribute to the global carbon footprint. Put your mouse over every rot to see how you can reduce your own carbon footprint.</p>



<article class="lifestyle-quote">
  <img class="quotemarks"src="img/quote2.svg" alt="">
<p>
  In a world of more than seven billion people, each of us is a drop in the bucket. <br>
  <p>
  <b>But with enough drops, we can fill any bucket.</b><br><br>

  <em>David Suzuki</em></p>
    <img class="quotemarks2"src="img/quote2.svg" alt="">
</article>
	<svg width="100%" height="700" font-family="sans-serif" font-size="10" text-anchor="middle" margin: "margin: 0 auto 0 -30%;"></svg>



<section class="bottom-cta">
<button class="cta" type="button" name="button"><a href="food.php">Changes you can make in your plate</a></button>
<button class="top" type="button" name="button"><a href="#top">Go back to top</a></button>
<button class="cta" type="button" name="button"><a href="transports.php">Changes you can make when commuting</a></button>
</section>

	<script>
		// Based loosely from this D3 bubble graph https://bl.ocks.org/mbostock/4063269
		// And this Forced directed diagram https://bl.ocks.org/mbostock/4062045
		let data = [{
			cat: 'library', name: 'organic', value: 40,
			icon: 'Buy ;organic ;products',
			desc: `

			`
		}, {
			cat: 'framework', name: 'Buy fair trade', value: 40,
			icon: 'Buy ; fair ; trade',
			desc: `

			`
		}, {
			cat: 'tooling', name: 'drive', value: 70,
			icon: 'Drive less; walk and; bike more; often',
			desc: `

			`
		}, {
			cat: 'library', name: 'food', value: 50,
			icon: 'Consume less; waste less',
			desc: `
			`
		}, {
			cat: 'framework', name: 'food', value: 40,
			icon: 'Eat ;less ;meat',
			desc: `
				`
		}, {
			cat: 'library', name: 'Litter', value: 40,
			icon: 'Do not;litter',
			desc: `

			`
		}, {
			cat: 'tooling', name: '', value: 50,
			icon: 'recycle your; household waste',
			desc: `
			`
		}, {
			cat: 'framework', name: 'energy', value: 30,
			icon: 'Use energy ; wisely',
			desc: `

			`
		}, {
			cat: 'tooling', name: 'water', value: 40,
			icon: 'use water; responsively',
			desc: `
			`
		},  {
			cat: 'framework', name: 'paper', value: 50,
			icon: 'Limit your ;paper ;consumption',
			desc: `

			`
		}, {
			cat: 'library', name: 'commute', value: 40,
			icon: 'Work from ; home',
			desc: `

			`
		}, {
			cat: 'tooling', name: 'water', value: 30,
			icon: 'Take showers',
			desc: `
			`
		}, {
			cat: 'framework', name: 'electricity', value: 80,
			icon: 'unplug your; electonic devices; when you are; not using; them',
			desc: `
			`
		}, {
			cat: 'library', name: 'commute', value: 70,
			icon: 'Take public ;transit when ;you can',
			desc: `
			`
		},
    {
			cat: 'tooling', name: 'electricity', value: 80,
			icon: 'offset ;your emissions; if you have to fly',
			desc: `
			`
		},

    {
      cat: 'library', name: 'energy', value: 70,
      icon: 'Use renewable; energy at home; and at work',
      desc: `
      `
    },
    {
      cat: 'tooling', name: 'food', value: 70,
      icon: 'Don not ;waste the food ;you buy',
      desc: `
      `
    },
    {
      cat: 'framework', name: 'electricity', value: 80,
      icon: 'Switch off ; the light ; when leaving ; a room',
      desc: `
      `
    },
    {
      cat: 'library', name: 'electricity', value: 90,
      icon: 'Switch off your ; computer and ; screen when ; leaving the ; office',
      desc: `
      `
    },
    {
      cat: 'tooling', name: 'food', value: 50,
      icon: 'Eat less ; processed ; food',
      desc: `
      `
    },
    {
      cat: 'library', name: 'waste', value: 50,
      icon: 'Try to go; "no waste"',
      desc: `
      `
    },
    {
			cat: 'framework', name: 'water', value: 50,
			icon: 'close the tap ; when not using;water',
			desc: `
			`
		}, {
			cat: 'library', name: 'water', value: 100,
			icon: 'Hang dry ; when you can ; instead of using ; your dryer',
			desc: `
			`
		},
    {
			cat: 'tooling', name: 'electricity', value: 60,
			icon: 'Be mindful ; about your ;heat and A/C ; consumption',
			desc: `
			`
		}, {
			cat: 'library', name: 'Change the world', value: 70,
			icon: 'Speak out ; about global ; warming',
			desc: `

			`
		}, {
			cat: 'framework', name: 'commute', value: 60,
			icon: 'Car pool ; as much as ; you can',
			desc: `
			`
		}, {
			cat: 'tooling', name: 'Shop', value: 80,
			icon: 'Shop locally',
			desc: `
			`
		}, {
			cat: 'library', name: 'workout', value: 60,
			icon: 'Take the stairs ; instead of the ; elevator',
			desc: `
			`
		},
    {
      cat: 'tooling', name: 'Education', value: 60,
      icon: 'Educate ; your ; children',
      desc: `
      `
    },
    {
      cat: 'framework', name: 'Education', value: 80,
      icon: 'Change to ; energy-efficient ; light bulbs',
      desc: `
      `
    },
    {
			cat: 'library', name: 'paper', value: 50,
			icon: 'Refuse ; paper ; ads',
			desc: `
			`
		}];

	</script>

	<script>
		let svg = d3.select('svg');
		let width = document.body.clientWidth; // get width in pixels
		let height = +svg.attr('height');
		let centerX = width * 0.5;
		let centerY = height * 0.5;
		let strength = 0.05;
		let focusedNode;

		let format = d3.format(',d');

		let scaleColor = d3.scaleOrdinal(d3.schemeCategory20c);

		// use pack to calculate radius of the circle
		let pack = d3.pack()
			.size([width , height ])
			.padding(1.5);

		let forceCollide = d3.forceCollide(d => d.r + 1);

		// use the force
		let simulation = d3.forceSimulation()
			// .force('link', d3.forceLink().id(d => d.id))
			.force('charge', d3.forceManyBody())
			.force('collide', forceCollide)
			// .force('center', d3.forceCenter(centerX, centerY))
			.force('x', d3.forceX(centerX ).strength(strength))
			.force('y', d3.forceY(centerY ).strength(strength));

		// reduce number of circles on mobile screen due to slow computation
		if ('matchMedia' in window && window.matchMedia('(max-device-width: 767px)').matches) {
			data = data.filter(el => {
				return el.value >= 50;
			});
		}

		let root = d3.hierarchy({ children: data })
			.sum(d => d.value);

		// we use pack() to automatically calculate radius conveniently only
		// and get only the leaves
		let nodes = pack(root).leaves().map(node => {
			console.log('node:', node.x, (node.x - centerX) * 2);
			const data = node.data;
			return {
				x: centerX + (node.x - centerX) * 3, // magnify start position to have transition to center movement
				y: centerY + (node.y - centerY) * 3,
				r: 0, // for tweening
				radius: node.r, //original radius
				id: data.cat + '.' + (data.name.replace(/\s/g, '-')),
				cat: data.cat,
				name: data.name,
				value: data.value,
				icon: data.icon,
				desc: data.desc,
			}
		});
		simulation.nodes(nodes).on('tick', ticked);

		svg.style('background-color', '#eee');
		let node = svg.selectAll('.node')
			.data(nodes)
			.enter().append('g')
			.attr('class', 'node')
			.call(d3.drag()
				.on('start', (d) => {
					if (!d3.event.active) simulation.alphaTarget(0.2).restart();
					d.fx = d.x;
					d.fy = d.y;
				})
				.on('drag', (d) => {
					d.fx = d3.event.x;
					d.fy = d3.event.y;
				})
				.on('end', (d) => {
					if (!d3.event.active) simulation.alphaTarget(0);
					d.fx = null;
					d.fy = null;
				}));

		node.append('circle')
			.attr('id', d => d.id)
			.attr('r', 0)
			.style('fill', d => scaleColor(d.cat))
			.transition().duration(2000).ease(d3.easeElasticOut)
				.tween('circleIn', (d) => {
					let i = d3.interpolateNumber(0, d.radius);
					return (t) => {
						d.r = i(t);
						simulation.force('collide', forceCollide);
					}
				})

		node.append('clipPath')
			.attr('id', d => `clip-${d.id}`)
			.append('use')
			.attr('xlink:href', d => `#${d.id}`);

		// display text as circle icon
		node.filter(d => !String(d.icon).includes('img/'))
			.append('text')
			.classed('node-icon', true)
			.attr('clip-path', d => `url(#clip-${d.id})`)
			.selectAll('tspan')
			.data(d => d.icon.split(';'))
			.enter()
				.append('tspan')
				.attr('x', 0)
				.attr('y', (d, i, nodes) => (13 + (i - nodes.length / 2 - 0.5) * 10))
				.text(name => name);

		// display image as circle icon
		node.filter(d => String(d.icon).includes('img/'))
			.append('image')
			.classed('node-icon', true)
			.attr('clip-path', d => `url(#clip-${d.id})`)
			.attr('xlink:href', d => d.icon)
			.attr('x', d => - d.radius * 0.7)
			.attr('y', d => - d.radius * 0.7)
			.attr('height', d => d.radius * 2 * 0.7)
			.attr('width', d => d.radius * 2 * 0.7)

		node.append('title')
			.text(d => (d.cat + '::' + d.name + '\n' + format(d.value)));

		let legendOrdinal = d3.legendColor()
			.scale(scaleColor)
			.shape('circle');

		let legend = svg.append('g')
			.classed('legend-color', true)
			.attr('text-anchor', 'start')
			.attr('transform','translate(20,30)')
			.style('font-size','12px')
			.call(legendOrdinal);

		let sizeScale = d3.scaleOrdinal()
  			.domain(['less use', 'more use'])
  			.range([5, 10] );

		let legendSize = d3.legendSize()
			.scale(sizeScale)
			.shape('circle')
			.shapePadding(10)
			.labelAlign('end');

		let legend2 = svg.append('g')
			.classed('legend-size', true)
			.attr('text-anchor', 'start')
			.attr('transform', 'translate(150, 25)')
			.style('font-size', '12px')
			.call(legendSize);


		/*
		<foreignObject class="circle-overlay" x="10" y="10" width="100" height="150">
			<div class="circle-overlay__inner">
				<h2 class="circle-overlay__title">ReactJS</h2>
				<p class="circle-overlay__body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, sunt, aspernatur. Autem repudiandae, laboriosam. Nulla quidem nihil aperiam dolorem repellendus pariatur, quaerat sed eligendi inventore ipsa natus fugiat soluta doloremque!</p>
			</div>
		</foreignObject>
		*/
		let infoBox = node.append('foreignObject')
			.classed('circle-overlay hidden', true)
			.attr('x', -350 * 0.5 * 0.8)
			.attr('y', -350 * 0.5 * 0.8)
			.attr('height', 350 * 0.8)
			.attr('width', 350 * 0.8)
				.append('xhtml:div')
				.classed('circle-overlay__inner', true);

		infoBox.append('h2')
			.classed('circle-overlay__title', true)
			.text(d => d.name);

		infoBox.append('p')
			.classed('circle-overlay__body', true)
			.html(d => d.desc);


		node.on('click', (currentNode) => {
			d3.event.stopPropagation();
			console.log('currentNode', currentNode);
			let currentTarget = d3.event.currentTarget; // the <g> el

			if (currentNode === focusedNode) {
				// no focusedNode or same focused node is clicked
				return;
			}
			let lastNode = focusedNode;
			focusedNode = currentNode;

			simulation.alphaTarget(0.2).restart();
			// hide all circle-overlay
			d3.selectAll('.circle-overlay').classed('hidden', true);
			d3.selectAll('.node-icon').classed('node-icon--faded', false);

			// don't fix last node to center anymore
			if (lastNode) {
				lastNode.fx = null;
				lastNode.fy = null;
				node.filter((d, i) => i === lastNode.index)
					.transition().duration(2000).ease(d3.easePolyOut)
					.tween('circleOut', () => {
						let irl = d3.interpolateNumber(lastNode.r, lastNode.radius);
						return (t) => {
							lastNode.r = irl(t);
						}
					})
					.on('interrupt', () => {
						lastNode.r = lastNode.radius;
					});
			}

			// if (!d3.event.active) simulation.alphaTarget(0.5).restart();

			d3.transition().duration(2000).ease(d3.easePolyOut)
				.tween('moveIn', () => {
					console.log('tweenMoveIn', currentNode);
					let ix = d3.interpolateNumber(currentNode.x, centerX);
					let iy = d3.interpolateNumber(currentNode.y, centerY);
					let ir = d3.interpolateNumber(currentNode.r, centerY * 0.5);
					return function (t) {
						// console.log('i', ix(t), iy(t));
						currentNode.fx = ix(t);
						currentNode.fy = iy(t);
						currentNode.r = ir(t);
						simulation.force('collide', forceCollide);
					};
				})
				.on('end', () => {
					simulation.alphaTarget(0);
					let $currentGroup = d3.select(currentTarget);
					$currentGroup.select('.circle-overlay')
						.classed('hidden', false);
					$currentGroup.select('.node-icon')
						.classed('node-icon--faded', true);

				})
				.on('interrupt', () => {
					console.log('move interrupt', currentNode);
					currentNode.fx = null;
					currentNode.fy = null;
					simulation.alphaTarget(0);
				});

		});

		// blur
		d3.select(document).on('click', () => {
			let target = d3.event.target;
			// check if click on document but not on the circle overlay
			if (!target.closest('#circle-overlay') && focusedNode) {
				focusedNode.fx = null;
				focusedNode.fy = null;
				simulation.alphaTarget(0.2).restart();
				d3.transition().duration(2000).ease(d3.easePolyOut)
					.tween('moveOut', function () {
						console.log('tweenMoveOut', focusedNode);
						let ir = d3.interpolateNumber(focusedNode.r, focusedNode.radius);
						return function (t) {
							focusedNode.r = ir(t);
							simulation.force('collide', forceCollide);
						};
					})
					.on('end', () => {
						focusedNode = null;
						simulation.alphaTarget(0);
					})
					.on('interrupt', () => {
						simulation.alphaTarget(0);
					});

				// hide all circle-overlay
				d3.selectAll('.circle-overlay').classed('hidden', true);
				d3.selectAll('.node-icon').classed('node-icon--faded', false);
			}
		});

		function ticked() {
			node
				.attr('transform', d => `translate(${d.x},${d.y})`)
				.select('circle')
					.attr('r', d => d.r);
		}
	</script>

<style media="screen">
* {
  box-sizing: inherit;
}
h1 {
  text-align: center;
}
svg {
  margin:auto;
  display:block;
  background-color: white!important;
}

.circle-overlay {
  font-size: 16px;
  border-radius: 50%;
  position: absolute;
  overflow: hidden;

  /*it's buggy with the foreignObject background right now*/
  /*background-color: rgba(255,255,255,0.5);*/
}
.circle-overlay__inner {
  text-align: center;
  width: 100%;
  height: 100%;
}

.hidden {
  display: none;
}
.node-icon--faded {
  opacity: 0.5;
}
.legend-size circle {
  fill: rgb(31, 119, 180);
}

.quotemarks{
width: 100px;
position: relative;
z-index: -1;
opacity: 0.2;
float: left;
clear: both;
overflow: hidden;
margin-top: -3%;

}

.quotemarks2{
width: 100px;
transform: rotate(-180deg);
position: relative;
z-index: -1;
opacity: 0.2;
float: right;
clear: both;
overflow: hidden;
}
.lifestyle-quote{
margin-top: 5%;
}
.lifestyle-quote p{
text-align: center;


}
</style>


<?php include "footer.php" ?>
