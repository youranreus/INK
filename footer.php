
<?php $this->footer(); ?>
</div>
</div>
<script data-no-instant>InstantClick.init();</script>
	</body>
  <footer>
  <center>
    <p style="color:#666;font-size:0.8em;">©<?php $this->options->title(); ?> 2017</p>
    <p style="color:#666;font-size:0.8em;"><SPAN id=span_dt_dt></SPAN></p></center>


    <script src="<?php $this->options->themeUrl('js/prism.js'); ?>"></script>
		<script src="<?php $this->options->themeUrl('js/ink.js'); ?>"></script>
		<script src="<?php $this->options->themeUrl('js/OwO.min.js'); ?>"></script>
		<script>
		//OWO
		var OwO = new OwO({
		    logo: 'QAQ',
		    container: document.getElementsByClassName('OwO')[0],
		    target: document.getElementsByClassName('textarea')[0],
		    api: '<?php $this->options->themeUrl('js/owo.json'); ?>',
		    position: 'up',
		    width: '100%',
		    maxHeight: '250px'
		});
		</script>
  </footer>
</html>
