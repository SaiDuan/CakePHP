	


<div id="top">

					
					
<div id="tagline"><p>Halls for Hire is a comprehensive directory of community

<br />halls and venues across Australia. <a href="/about">Learn More >></a></p>



						<!--<div id="tagline_btn_list"><a href="/component/ezrealty/?controller=properties&amp;task=add"><img src="img/list_hall_btn.png" border=0 /></a></div>-->

	<div id = "tagline_btn_list">
	<?php echo $this->Html->image("list_hall_btn.png", array(
		    "alt" => "List Hall",
	    'url' => array('controller' => 'halls', 'action' => 'add')
		)); ?></div>				

<div id = "tagline_btn_sign">
	<?php echo $this->Html->image("sign_in_btn.png", array(
		    "alt" => "Sign In",
	    'url' => array('controller' => 'users', 'action' => 'login')
		)); ?>





</div>

					</div>

										

				</div>

				
				<div id="wrapper">

					
						<div id="right">

							<!-- sidebar start -->

										<div class="moduletable1">
					<h3>Featured Venues</h3>
					 <table width='100%' align='center' cellspacing=15><tr id="erow"><td id='himg'><a href="http://hallsforhire.com.au/index.php?option=com_ezrealty&controller=properties&task=detail&id=120&Itemid=0"><img src="http://hallsforhire.com.au/components/com_ezrealty/ezrealty/th/15bf545774a3f4d8a6d0790d0c549ef3.jpg" width=120 height=90 border=0 /></a></td><td valign="top" id='hdesc'><div id="fname">Nexus Gallery</div><div id="addy">Cnr North Tce and Morphett St<br>Adelaide, South Australia,  5000</div><div id="fdsc">The Nexus gallery is an ideal space for intimate arts exhibitions and small functions.
The Gal...</div><div><a id="freadmore" href="http://hallsforhire.com.au/index.php?option=com_ezrealty&controller=properties&task=detail&id=120&Itemid=0">More Info</a></div></td></tr><tr id="erow"><td id='himg'><a href="http://hallsforhire.com.au/index.php?option=com_ezrealty&controller=properties&task=detail&id=81&Itemid=0"><img src="http://hallsforhire.com.au/components/com_ezrealty/ezrealty/th/34cda90b505797f4cd22ac2eee797c79.jpg" width=120 height=90 border=0 /></a></td><td valign="top" id='hdesc'><div id="fname">Ithaca Hall</div><div id="addy">Cnr Kennedy & Enoggera Terraces<br>Red Hill, Queensland,  4059</div><div id="fdsc">Formerly “Ithaca Library” this is an historic building now used by the public and community...</div><div><a id="freadmore" href="http://hallsforhire.com.au/index.php?option=com_ezrealty&controller=properties&task=detail&id=81&Itemid=0">More Info</a></div></td></tr><tr id="erow"><td id='himg'><a href="http://hallsforhire.com.au/index.php?option=com_ezrealty&controller=properties&task=detail&id=65&Itemid=0"><img src="http://hallsforhire.com.au/components/com_ezrealty/ezrealty/th/ad0110381ee3cf752255a9d3fba41185.jpg" width=120 height=90 border=0 /></a></td><td valign="top" id='hdesc'><div id="fname">Collingwood Masonic Centre</div><div id="addy">141  Gipps St<br>Abbotsford, Victoria,  3067</div><div id="fdsc">The main hall is approx 10 meters by 15 meters.
 
Hire includes chairs and tables and normall...</div><div><a id="freadmore" href="http://hallsforhire.com.au/index.php?option=com_ezrealty&controller=properties&task=detail&id=65&Itemid=0">More Info</a></div></td></tr><tr id="erow"><td id='himg'><a href="http://hallsforhire.com.au/index.php?option=com_ezrealty&controller=properties&task=detail&id=30&Itemid=0"><img src="http://hallsforhire.com.au/components/com_ezrealty/ezrealty/th/7bbe88ccef5955157163fc02f1969172.jpg" width=120 height=90 border=0 /></a></td><td valign="top" id='hdesc'><div id="fname">Burrinja Cultural Centre</div><div id="addy">351 Glenfern Road<br>Upwey , Victoria,  3158</div><div id="fdsc">Situated in the picturesque Dandenong Ranges, Burrinja Cultural Centre offers vibrant, creative...</div><div><a id="freadmore" href="http://hallsforhire.com.au/index.php?option=com_ezrealty&controller=properties&task=detail&id=30&Itemid=0">More Info</a></div></td></tr><tr id="erow"><td id='himg'><a href="http://hallsforhire.com.au/index.php?option=com_ezrealty&controller=properties&task=detail&id=22&Itemid=0"><img src="http://hallsforhire.com.au/components/com_ezrealty/ezrealty/th/360fc6aeea4850ae7abd17bc5724adc4.png" width=120 height=90 border=0 /></a></td><td valign="top" id='hdesc'><div id="fname">Paddington Uniting Church</div><div id="addy">395 Oxford Street<br>Paddington, New South Wales,  2021</div><div id="fdsc">The acoustic ambience of the historic 1877 Uniting Church has made this a popular performance s...</div><div><a id="freadmore" href="http://hallsforhire.com.au/index.php?option=com_ezrealty&controller=properties&task=detail&id=22&Itemid=0">More Info</a></div></td></tr></table>		</div>
	

						<!-- sidebar end -->

						</div>

					
					<div id="main">

					
						<!-- Body start -->

						
<table class="contentpaneopen">



<tr>
<td valign="top">
<div class="moduletable1">
<h3>Find a Hall</h3>
</div>
<p>


<script language="javascript" type="text/javascript">

function changeLoc(item) {

	var url = 'index.php';

	var log = $('locid').empty().addClass('ajax-loading');

	var req = new Ajax(url,{

		method:'post',

		update:$('locid'),

		data:{'stid' : item, 'task' : 'getlocalities'},

		evalScripts: true,

		onComplete: function(){

			log.removeClass('ajax-loading');

		}

	}).request();

}

</script>



<form name="searchfilter" action="/halls-for-hire-hidden?controller=properties&amp;task=results" method="get">



	<input type="hidden" name="option" value="com_ezrealty" />

	<input type="hidden" name="controller" value="properties" />

	<input type="hidden" name="task" value="results" />

	<input type="hidden" name="Itemid" value="79" />

	<input type="hidden" name="type" value="0" />

	<input type="hidden" name="cnid" value="0" />

	<input type="hidden" name="stid" value="0" />

	<input type="hidden" name="prev" value="search_results" />




	<input type="hidden" name="cid" value="0" />








	<input type="hidden" name="postcode" value=""/>

	<input type="hidden" name="radius" value="" />




<table width="100%" class="moduletable2">

	<tr>

		<td width="100%">

<table id="minisearch">

  <tr>
  
    <td id="step"><h1>Search <span></span></h1></td>
</tr>
<tr>
    <td id="heading"><div><h3>Enter the area:</h3></div></td>
</tr>


	<td><input class="input2" type="text" style="padding:3px; margin-bottom:70px"></td>



    <td>

	<div id="search_btn1"><input id="search_btn2" type="submit" name="submit" value="Search" /></div>

	

	</td>

  </tr>

  <!-- <tr>

   <td id="step"><h1>Or</h1></td>

  <td><div id="search_btn_adv"><a href="/component/ezrealty/?controller=properties&amp;task=search&amp;id=1">Click here to perform an advaced search</a></div>

  </td>

  </tr> -->

</table>

</td>

</tr>

</table>



</form>
