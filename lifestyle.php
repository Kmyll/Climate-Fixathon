<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/plugins/forceDirected.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/material.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
<?php include "header.php" ?>



<!--educate your kids-->

<div class="container lifestyle" id="top">
  <h1>Lifestyle</h1>

<p>Our day to day activities can greatly influence our carbon emission and therefore contribute to the global carbon footprint. Here are some ideas you can implement to reduce your carbon emissions.
	<br>Please click on each bubble to see more.
</p>



<article class="lifestyle-quote">
  <img class="quotemarks"src="img/quote2.svg" alt="quotemark">
<p>
  In a world of more than seven billion people, each of us is a drop in the bucket. <br>
  <p>
  <b>But with enough drops, we can fill any bucket.</b><br><br>

  <em>David Suzuki</em></p>
    <img class="quotemarks2"src="img/quote2.svg" alt="quotemark">
</article>
	<svg width="100%" height="700" font-family="sans-serif" font-size="10" text-anchor="middle" margin: "margin: 0 auto 0 -30%;"></svg>

</div>
	<script>
		// Based loosely from this D3 bubble graph https://bl.ocks.org/mbostock/4063269
		// And this Forced directed diagram https://bl.ocks.org/mbostock/4062045
		let data = [{
			cat: 'Shopping', name: 'Organic', value: 40,
			icon: 'img/Lifestyle/organic.png',
			desc: `
       Buy organic products to  <br>
       avoid indirectly participating  <br>
       in the implementation of toxic  <br>
       products in the soil.<br><br><br>
      Plus, most organic products respect  <br>
      seasons so it reduce  <br>
       transport carbon footprint. <br>
			`
		}, {
			cat: 'Shopping', name: 'Buy fair trade', value: 40,
			icon: 'img/Lifestyle/fairtrade.png',
			desc: `
      Buy fairtrade products to eat  <br>
      goods that respect both the  <br>
      environment as well as producers <br>
      from the other side of the world.
			`
		}, {
			cat: 'Travel', name: 'Drive', value: 70,
			icon: 'img/Lifestyle/car.png',
			desc: `
      Drive less, walk and bike  <br>
	  more often. <br> <br>
      It's better for your health
      and for the environment.
			`
		}, {
			cat: 'Shopping', name: 'Eat better', value: 50,
			icon: 'img/Lifestyle/eatLess.svg',
			desc: `
      Eat better, consume less and <br>
	  waste less <br><br>
      Prioritize better products <br>
      (organic, seasonal, better quality) <br>
      rather than an aboundance of food <br>
      poor in nutrients.
			`
		}, {
			cat: 'Shopping', name: 'Less meat', value: 40,
			icon: 'img/Lifestyle/Vegetarian.svg.png',
			desc: `
      Eat less meat. <br>
	  Animals need a lot <br>
      of water, food and medicine <br>
      to triple their weight in <br>
      a minimal amount of time. <br><br>
      Eating less meat contribute to <br>
      saving their lives.
				`
		}, {
			cat: 'Behavior', name: 'Litter', value: 40,
			icon: 'img/Lifestyle/litter.png',
			desc: `
      Do not litter <br><br>
      Most of the litter is not <br>
      biodegradable such as plastic <br>
      and may be eaten by birds <br>
      or animals that live in the <br>
      ocean.
			`
		}, {
			cat: 'Behavior', name: 'Recycle', value: 50,
			icon: 'img/Lifestyle/recycle.svg',
			desc: `
      Recycle your waste. <br>
      Depending where you live in <br>
      the world, you most likely <br>
      already seen different colour <br>
      of trash container. <br>
      Differentiate paper, plastic, glass <br>
      and non recyclable items from <br>
      your home to reduce global waste.
			`
		}, {
			cat: 'Behavior', name: 'Energy', value: 30,
			icon: 'img/Lifestyle/energy.png',
			desc: `
      Use energy wisely <br>
      Energy production contributes <br>
      to the global warming.<br><br>
      Switch off the lights when leaving<br>
      a room, unplug your devices when you <br>
      are not using it or when it is charged, <br>
      and don't overheat or overcool  <br>
      your space. You can also invest <br>
      in some energy saving bulbs.
			`
		}, {
			cat: 'Behavior', name: 'Water', value: 40,
			icon: 'img/Lifestyle/water.svg',
			desc: `
      Use water responsively. <br>
      Water is a exhaustible vital<br>
	 source that must be shared by over <br>
	 7 billions humans or earth (without <br>
	  counting animals, nor agriculture that <br>
	  need a lot of water). Therefore, avoid <br>
	  taking hot long showers or baths, and <br>
	  use your laundry and dishes <br> machines responsively.
			`
		},  {
			cat: 'Behavior', name: 'Paper', value: 50,
		  icon: 'img/Lifestyle/paper.png',
			desc: `
      Limit your paper consumption <br>
      paper contributes to the amazon <br>
      deforestation since trees are used <br>
      to make paper pate and therefore paper.
			`
		}, {
			cat: 'Travel', name: 'Work', value: 40,
		   icon: 'img/Lifestyle/work.svg',
			desc: `
      Work from home when <br> possible 
      if your job <br> allows  it. <br><br>
      It saves you commuting time <br>
      and contributes to reducing the <br>
      global carbon footprint.
			`
		}, {
			cat: 'Behavior', name: 'Water', value: 30,
		   icon: 'img/Lifestyle/shower.png',
			desc: `
      Favour small showers  <br>rather than 
      baths, again  <br>in order to contributes  <br>
       to a responsive water <br> consumption. <br>
			`
		}, {
			cat: 'Travel', name: 'Commute', value: 70,
		   icon: 'img/Lifestyle/bus.svg',
			desc: `
      If you are travelling, <br> take public <br>
      transit whenever <br> you can. It saves  <br>
       money and it is better  <br> for the environment.
			`
		},
    {
			cat: 'Travel', name: 'Electricity', value: 80,
		   icon: 'img/Lifestyle/offset.svg',
			desc: `
      Offset your Carbon emissions <br> if you have to fly <br><br><br><br>
      It can be as easy as <br> contributing to planting <br>
      trees and it is <br> good for the planet.
			`
		},

    {
      cat: 'Behavior', name: 'Energy', value: 70,
      icon: 'img/Lifestyle/renewable.png',
      desc: `
      'Use renewable energy at <br>home and at work <br>
      whenever possible. <br>It can be as easy as  <br>
      using a fan instead of <br>the AC, or using  <br>
      a lamp or a calculator<br> with a solar panel on it.
      `
    },
    {
      cat: 'Shopping', name: 'Food', value: 70,
      icon: 'img/Lifestyle/waste.png',
      desc: `
      Do not waste the food you <br> buy.
      Buy less more often if <br> you have 
      to, rather than <br>  wasting unconsumed 
      goods.
      `
    },
    {
      cat: 'Behavior', name: 'Electricity', value: 90,
      icon: 'img/Lifestyle/plug.png',
      desc: `
      'Switch off your computer and <br>
      screen when leaving the office.
      `
    },
    {
      cat: 'Shopping', name: 'Food', value: 50,
      icon: 'img/Lifestyle/junk.png',
      desc: `
      <br>
      Eat less processed food
      `
    },
    {
      cat: 'Shopping', name: '0 Waste', value: 50,
      icon: 'img/Lifestyle/0waste.png',
      desc: `
      Try to go "no waste", <br> by buying
      from bulk and <br> avoiding packaging.
      `
    },
    {
			cat: 'Behavior', name: 'Water', value: 50,
      icon: 'img/Lifestyle/tap.png',
			desc: `
      Close the tap when you <br> are not directly <br>
      using water.
			`
		}, {
			cat: 'Behavior', name: 'Water', value: 100,
      icon: 'img/Lifestyle/dryer.png',
			desc: `
      Hang dry whenever you can <br> instead of using 
      your dryer <br> in order to save electricity.<br><br>
      This works for your clothes <br> and for your hair
			`
		},
     {
			cat: 'Behavior', name: 'Communicate', value: 70,
      icon: 'img/Lifestyle/speak.png',
			desc: `
      Speak out about global <br> warming, inform your <br> peers.
			`
		}, {
			cat: 'Travel', name: 'Commute', value: 60,
      icon: 'img/Lifestyle/carpool.svg',
			desc: `
      Car pool as much as you can.
			`
		}, {
			cat: 'Shopping', name: 'Shop', value: 80,
      icon: 'img/Lifestyle/shop.png',
			desc: `
      Shop locally. It will support <br>
      local shops and reduce carbon <br>
      footprint from transport.
			`
		}, {
			cat: 'Behavior', name: 'Workout', value: 60,
      icon: 'img/Lifestyle/stairs.png',
			desc: `
      Take the stairs instead <br> of the elevator.
			`
		},
    {
      cat: 'Behavior', name: 'Education', value: 60,
      icon: 'img/Lifestyle/kid.svg',
      desc: `
      Educate your children. <br> By watching at you, <br>
      they will mimic you. <br> Plus, it' is a <br>
      good idea to let <br> them know how to protect <br>
      the environment.`
    },
    {
	  cat: 'Behavior', name: 'Paper', value: 50,
      icon: 'img/Lifestyle/ads.svg',
	  desc: `
      Refuse paper ads. <br><br> Depending wherever you 
      live, some <br> "no ads"  stickers may be available <br>
      at your cityhall.`
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

.circle-overlay__body{
  text-align: center!important;
  font-weight bold;
  color: white;
}

svg {
  margin:auto;
  display:block;
  background-color: white!important;
}

</style>


<?php include "footer.php" ?>
