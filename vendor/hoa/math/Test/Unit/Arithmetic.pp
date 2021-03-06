//
// Hoa
//
//
// @license
//
// New BSD License
//
// Copyright © 2007-2015, Ivan Enderlin. All rights reserved.
//
// Redistribution and use in source and binary forms, with or without
// modification, are permitted provided that the following conditions are met:
//     * Redistributions of source code must retain the above copyright
//       notice, this list of conditions and the following disclaimer.
//     * Redistributions in binary form must reproduce the above copyright
//       notice, this list of conditions and the following disclaimer in the
//       documentation and/or other materials provided with the distribution.
//     * Neither the name of the Hoa nor the names of its contributors may be
//       used to endorse or promote products derived from this software without
//       specific prior written permission.
//
// THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
// AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
// IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
// ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDERS AND CONTRIBUTORS BE
// LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
// CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
// SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
// INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
// CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
// ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
// POSSIBILITY OF SUCH DAMAGE.
//
// Grammar \Hoa\Math\Arithmetic.
//
// Provide a testable (i.e. easily generable) grammar for arithmetic
// expressions.
//
// @author     Ivan Enderlin <ivan.enderlin@hoa-project.net>
// @copyright  Copyright © 2007-2015 Ivan Enderlin.
// @license    New BSD License
//


%skip   space     \s
%token  bracket_  \(
%token _bracket   \)
%token  comma     ,
%token  number    ([1-9]\d*)(\.\d+)?
%token  plus      \+
%token  minus     \-
%token  times     \*
%token  div       /
%token  constant  [A-Z_]+[A-Z0-9_]+
%token  id        \w+

expression:
    primary() ( ::plus:: #addition expression() )?

primary:
    secondary() ( ::minus:: #substraction expression() )?

secondary:
    ternary() ( ::times:: #multiplication expression() )?

ternary:
    term() ( ::div:: #division expression() )?

term:
    ( ::bracket_:: expression() ::_bracket:: #group )
  | number()
  | ( ::minus:: #negative | ::plus:: ) term()

number:
    <number>
