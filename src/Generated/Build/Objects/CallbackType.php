<?php

namespace App\Api\Generated\Build\Objects;

enum CallbackType: string
{
    case AudioNew = 'audio_new';
    case BoardPostNew = 'board_post_new';
    case BoardPostEdit = 'board_post_edit';
    case BoardPostRestore = 'board_post_restore';
    case BoardPostDelete = 'board_post_delete';
    case Confirmation = 'confirmation';
    case GroupLeave = 'group_leave';
    case GroupJoin = 'group_join';
    case GroupChangePhoto = 'group_change_photo';
    case GroupChangeSettings = 'group_change_settings';
    case GroupOfficersEdit = 'group_officers_edit';
    case LeadFormsNew = 'lead_forms_new';
    case MarketCommentNew = 'market_comment_new';
    case MarketCommentDelete = 'market_comment_delete';
    case MarketCommentEdit = 'market_comment_edit';
    case MarketCommentRestore = 'market_comment_restore';
    case MarketOrderNew = 'market_order_new';
    case MarketOrderEdit = 'market_order_edit';
    case MessageNew = 'message_new';
    case MessageReply = 'message_reply';
    case MessageEdit = 'message_edit';
    case MessageAllow = 'message_allow';
    case MessageDeny = 'message_deny';
    case MessageRead = 'message_read';
    case MessageTypingState = 'message_typing_state';
    case MessagesEdit = 'messages_edit';
    case MessageReactionEvent = 'message_reaction_event';
    case PhotoNew = 'photo_new';
    case PhotoCommentNew = 'photo_comment_new';
    case PhotoCommentDelete = 'photo_comment_delete';
    case PhotoCommentEdit = 'photo_comment_edit';
    case PhotoCommentRestore = 'photo_comment_restore';
    case PollVoteNew = 'poll_vote_new';
    case UserBlock = 'user_block';
    case UserUnblock = 'user_unblock';
    case VideoNew = 'video_new';
    case VideoCommentNew = 'video_comment_new';
    case VideoCommentDelete = 'video_comment_delete';
    case VideoCommentEdit = 'video_comment_edit';
    case VideoCommentRestore = 'video_comment_restore';
    case WallPostNew = 'wall_post_new';
    case WallReplyNew = 'wall_reply_new';
    case WallReplyEdit = 'wall_reply_edit';
    case WallReplyDelete = 'wall_reply_delete';
    case WallReplyRestore = 'wall_reply_restore';
    case WallRepost = 'wall_repost';
}