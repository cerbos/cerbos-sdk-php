<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/expr/v1alpha1/syntax.proto

namespace GPBMetadata\Google\Api\Expr\V1Alpha1;

class Syntax
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
%google/api/expr/v1alpha1/syntax.protogoogle.api.expr.v1alpha1google/protobuf/struct.protogoogle/protobuf/timestamp.proto"�

ParsedExpr2
expr (2.google.api.expr.v1alpha1.ExprRexprE
source_info (2$.google.api.expr.v1alpha1.SourceInfoR
sourceInfo"�
Expr
id (RidC

const_expr (2".google.api.expr.v1alpha1.ConstantH R	constExprE

ident_expr (2$.google.api.expr.v1alpha1.Expr.IdentH R	identExprH
select_expr (2%.google.api.expr.v1alpha1.Expr.SelectH R
selectExprB
	call_expr (2#.google.api.expr.v1alpha1.Expr.CallH RcallExprH
	list_expr (2).google.api.expr.v1alpha1.Expr.CreateListH RlistExprN
struct_expr (2+.google.api.expr.v1alpha1.Expr.CreateStructH R
structExpr]
comprehension_expr	 (2,.google.api.expr.v1alpha1.Expr.ComprehensionH RcomprehensionExpr
Ident
name (	Rnameu
Select8
operand (2.google.api.expr.v1alpha1.ExprRoperand
field (	Rfield
	test_only (RtestOnly�
Call6
target (2.google.api.expr.v1alpha1.ExprRtarget
function (	Rfunction2
args (2.google.api.expr.v1alpha1.ExprRargss

CreateList:
elements (2.google.api.expr.v1alpha1.ExprRelements)
optional_indices (RoptionalIndices�
CreateStruct!
message_name (	RmessageNameK
entries (21.google.api.expr.v1alpha1.Expr.CreateStruct.EntryRentries�
Entry
id (Rid
	field_key (	H RfieldKey9
map_key (2.google.api.expr.v1alpha1.ExprH RmapKey4
value (2.google.api.expr.v1alpha1.ExprRvalue%
optional_entry (RoptionalEntryB

key_kind�
Comprehension
iter_var (	RiterVar=

iter_range (2.google.api.expr.v1alpha1.ExprR	iterRange
accu_var (	RaccuVar;
	accu_init (2.google.api.expr.v1alpha1.ExprRaccuInitE
loop_condition (2.google.api.expr.v1alpha1.ExprRloopCondition;
	loop_step (2.google.api.expr.v1alpha1.ExprRloopStep6
result (2.google.api.expr.v1alpha1.ExprRresultB
	expr_kind"�
Constant;

null_value (2.google.protobuf.NullValueH R	nullValue

bool_value (H R	boolValue!
int64_value (H R
int64Value#
uint64_value (H Ruint64Value#
double_value (H RdoubleValue#
string_value (	H RstringValue!
bytes_value (H R
bytesValueF
duration_value (2.google.protobuf.DurationBH RdurationValueI
timestamp_value	 (2.google.protobuf.TimestampBH RtimestampValueB
constant_kind"�

SourceInfo%
syntax_version (	RsyntaxVersion
location (	Rlocation!
line_offsets (RlineOffsetsQ
	positions (23.google.api.expr.v1alpha1.SourceInfo.PositionsEntryR	positionsU
macro_calls (24.google.api.expr.v1alpha1.SourceInfo.MacroCallsEntryR
macroCalls<
PositionsEntry
key (Rkey
value (Rvalue:8]
MacroCallsEntry
key (Rkey4
value (2.google.api.expr.v1alpha1.ExprRvalue:8"p
SourcePosition
location (	Rlocation
offset (Roffset
line (Rline
column (RcolumnBn
com.google.api.expr.v1alpha1BSyntaxProtoPZ<google.golang.org/genproto/googleapis/api/expr/v1alpha1;expr�bproto3'
        , true);

        static::$is_initialized = true;
    }
}

