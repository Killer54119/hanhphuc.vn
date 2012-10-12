<?php
defined('_JEXEC') or die('Restricted Access');
?>
<form method="post" action="index.php" enctype="multipart/form-data">
	<fieldset class="list-fieldset">
		<legend>Cài đặt trang chủ</legend>
		<table>
			<?php /*
			<tr>
				<td width="160">
					Tiêu đề:
				</td>
				<td>
					<input type="text" size="50" class="inputbox" name="title" value="<?php echo $this->rows->content->title;?>" />
				</td>
			</tr>
			<tr>
				<td>
					Giới thiệu:
				</td>
				<td>
					<?php
						$editor = & JFactory::getEditor();
						echo $editor->display('intro', $this->rows->content->intro, '550', '200', '60', '15', false);
					?>
				</td>
			</tr>
			*/ ?>
			<tr>
				<td>Nội dung:</td>
				<td>
					<?php
						$editor = & JFactory::getEditor();
						echo $editor->display('content', $this->rows->content->content, '550', '400', '60', '35', false);
					?>
				</td>
			</tr>
			<tr>
				<td>Ảnh:</td>
				<td>
					<?php if(!empty($this->rows->content->image) && file_exists($this->rows->content->image)) { ?>
						<img src="<?php echo $this->rows->content->image;?>" /><br/>
					<?php } ?>
					<input type="file" name="image" />
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" class="inputbox" value="Ghi Lại" /></td>
			</tr>
		</table>
	</fieldset>
	<input type="hidden" name="option" value="com_wedding" />
	<input type="hidden" name="view" value="home" />
	<input type="hidden" name="task" value="save" />
	<input type="hidden" name="Itemid" value="<?php echo JRequest::getInt('Itemid');?>" />
</form>
